<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class QueryController extends Controller
{
    //
      public function search(Request $request){
         
        // $reqireclass=$request->requireclass;
        // $location=$request->location;
        // $salary=$request->salary;
        // // $teacher = User::where('class','like','%'.$search.'%')->orderBy('id')->paginate(6);
        // // $teacher = User::find();
       
        
        //  $teacher = User::query()
        // ->where('class', 'LIKE', "%{$reqireclass}%")->get();

        //  $teacher = User::query()
        // ->where('address', 'LIKE', "%{$location}%")->get();

        // //  $teacher = User::query()
        // // ->where('salary', 'LIKE', "%{$salary}%")->get();
        // //  dd($teacher) ;

        $teacher = User::when($request->requireclass, function ($query, $requireclass) {
          return $query->where('class', 'like', "%{$requireclass}%");
                })->when($request->location, function ($query, $location) {
                    return $query->where('address', 'like', "%{$location}%");
                })->when($request->salary , function ($query, $salary) {
                    return $query->where('salary','like',"{$salary}");
                }, function ($query) {
                    return $query->orderByDesc('id');
                })->get();

     //   return view('welcome', compact('annonces'));
         return view('pages.teacher',compact('teacher'));
    }
}
