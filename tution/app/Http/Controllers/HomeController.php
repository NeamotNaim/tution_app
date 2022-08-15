<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function ShowsearchPage(){
        return view('pages.search_page');
    }
     public function ShowaboutPage(){
        return view('pages.about_us');
    }

    public function ShowReqTutorPage(){
        return view('pages.req_for_tutor');
    }
  
}
