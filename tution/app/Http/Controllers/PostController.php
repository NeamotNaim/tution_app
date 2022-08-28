<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $tuition=Post::get();
        return view('pages.tuition',compact('tuition'));
    }
    public function store(Request $request){
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],

        ]);

        $user = Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'school' => $request->school,
            'class' => $request->class,
            'subject' => $request->subject,
            'merit' => $request->merit,
            'age' => $request->age,
            'gender' => $request->gender,
            'salary' => $request->salary,
            'days_per_week' => $request->days_per_week,
            'tutor_gender' => $request->tutor_gender,
        ]);
        return redirect()->route('home');
    }
}
