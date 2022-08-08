<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function search(Request $request){
         
        $search=$request->searchforteacher;
        // $teacher = User::where('class','like','%'.$search.'%')->orderBy('id')->paginate(6);
        // $teacher=User::find();
       
        
         $teacher = User::query()
        ->where('class', 'LIKE', "%{$search}%")->get();
        //  dd($teacher) ;
         return view('pages.teacher',compact('teacher'));
    }
}
