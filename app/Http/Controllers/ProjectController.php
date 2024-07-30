<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    $projects = ProjectResource::collection(Project::with('skill', 'category')->get());
       // $categories = CategoryResource::collection(Project::with('category')->get());
        return Inertia::render('projects/index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::all();
        $categories = Category::all();
        return Inertia::render('projects/create', compact('skills', 'categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>['required' , 'image'],
            'name'=>['required' , 'min:3'],
            'skill_id'=>['required' ],
            'category_id'=>['required' ]

           ]);

           if($request->hasFile('image')){
             $image = $request->file('image')->store("projects");
             Project::create([
                'skill_id'=>$request->skill_id,
                'category_id'=>$request->category_id,
                'name'=>$request->name,
                'image'=>$image,
                'project_url'=>$request->project_url,

             ]);

            // return Redirect::route('skills.index');
             return redirect()->route('projects.index')->with('message', 'Project created successfully');
           }
           return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {


        $skills = Skill::all();
        $categories = Category::all();
        return Inertia::render('projects/edit', compact('project', 'skills', 'categories'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        Log::info('Request Data:', $request->all());
        Log::info('Project Data Before Update:', $project->toArray());

        $image = $project->image;
        $request->validate([
            'name' =>['required', 'min:3'],
            'skill_id'=>['required'],
            'category_id'=>['required'],
        ]);
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }
        $project->update([
            'name' =>$request->name,
            'skill_id'=>$request->skill_id,
            'category_id'=>$request->category_id,
            'project_url'=>$request->project_url,
            'image'=>$image
        ]);
        return redirect()->route('projects.index')->with('message', 'Project update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
       $project->delete();

       return redirect()->back()->with('message', 'Project delete successfully');;
    }
}
