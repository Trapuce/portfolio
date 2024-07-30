<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Category;

use App\Http\Resources\SkillResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\CategoryResource;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
   public function welcome(){
    $skills = SkillResource::collection(Skill::all());
    $projects = ProjectResource::collection(Project::with('skill', 'category')->get());
    $categories = CategoryResource::collection(Category::all());

    return Inertia::render('Welcome', compact('skills', 'projects', 'categories'));
   }
}
