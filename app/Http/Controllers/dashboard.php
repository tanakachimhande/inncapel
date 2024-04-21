<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\project;
use App\Models\Product;

class dashboard extends Controller
{

    public function dashboard (){

        $clientTestimonials = Testimonial::all();
        $faqContent = Faq::all();
        $products = Product::all();
        $services = Service::all();
        $projects = Project::all();
        $navItems = Navbar::all();
        $serviceCategoryContent = ServiceCategory::all();
        $countProducts = $products->count();
        $countTestimonials = $clientTestimonials->count();
        $countFaqs = $faqContent->count();
        $countServices = $services->count();
        $countNavlinks = $navItems->count();
        $countProjects = $projects->count();
        $countServiceCategory = $serviceCategoryContent->count();

        return view('cms.dashboard',[
            'testy'=>$countTestimonials,
            'faqs'=>$countFaqs,
            'products'=>$countProducts,
            'serviceCategory'=>$countServiceCategory,
            'services'=>$countServices,
            'navlinks'=>$countNavlinks,
            'projects'=>$countProjects,
        ]);
    }

}
