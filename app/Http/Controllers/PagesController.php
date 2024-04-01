<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home (){
        return view('home');
    }
    public function about (){
        return view('about');
    }
    public function services (){
        return view('services');
    }
    public function projectsList (){
        return view('projectslist');
    }
    public function testimonials (){
        return view('testimonials');
    }
    public function faq (){
        return view('faq');
    }
    public function projectsDone (){
        return view('projectsSinglePage');
    }
    public function singleProjectDone (){
        return view('singleProjectDetails');
    }


    // Dashboard Functionalities

    public function dashboard (){
        return view('cms.dashboard');
    }


}
