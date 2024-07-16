<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('dt2040760@gmail.com')->send(new ContactMail($request->name, $request->email, $request->body));

        return redirect()->back();
    }
}
