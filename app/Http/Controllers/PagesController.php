<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\HomeHero;
use App\Models\About;
use App\Models\Whyus;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\project;

class PagesController extends Controller
{
    public function home (){
        $navItems = Navbar::all();
        $heroContent = HomeHero::first();
        $aboutContent = About::first();
        $whyusContent = whyus::all();
        $clientTestimonials = Testimonial::all();
        $faqContent = Faq::all();
        $serviceCategoryContent = ServiceCategory::all();
        $contactContent = Contact::first();
        $countWhyus = $whyusContent->count();
        $countTestimonials = $clientTestimonials->count();
        $countFaqs = $faqContent->count();
        $countServiceCategory = $serviceCategoryContent->count();
        $categoriesWithServices = serviceCategory::with('services')->get();

        return view('home',[
            'navbarItems'=>$navItems,
            'heroContent'=>$heroContent,
            'aboutContent'=>$aboutContent,
            'clientTestimonials'=>$clientTestimonials,
            'contacts'=>$contactContent,
            'faqContent'=>$faqContent,
            'whyusContent'=>$whyusContent,
            'serviceCategoryContent'=>$serviceCategoryContent,
            'categoriesWithServices'=>$categoriesWithServices,
            'countWhyus'=>$countWhyus,
            'countTestimonials'=>$clientTestimonials,
            'countFaqs'=> $countFaqs,
            'countServiceCategory'=>$countServiceCategory,
        ]);
    }
    public function about (){
        $navItems = Navbar::all();
        return view('about',['navbarItems'=>$navItems]);
    }
    public function services (){
        $navItems = Navbar::all();
        return view('services',['navbarItems'=>$navItems]);

    }
    public function projectsList (){
        $navItems = Navbar::all();
        return view('projectslist',['navbarItems'=>$navItems]);
    }
    public function testimonials (){
        $navItems = Navbar::all();
        return view('testimonials',['navbarItems'=>$navItems]);
    }
    public function faq (){
        $navItems = Navbar::all();
        return view('faq',['navbarItems'=>$navItems]);
    }
    public function contact (){
        $navItems = Navbar::all();
        return view('contact',['navbarItems'=>$navItems]);
    }
    public function projectsDone ($id){
        $navItems = Navbar::all();
        $projects = project::where('category_id', $id)->get();
        $categName = project::where('category_id', $id)->first();
        if($categName){
            $categoryName = $categName->project_category;
            $countProjects = $projects->count();
            return view('projectsSinglePage',
            ['navbarItems'=>$navItems,
            'projects'=>$projects,
            'countProjects'=>$countProjects,
            'categoryName'=>$categoryName,
            ]);
        }
        else {
           return back()->with('error','No projects found');
        }

    }
    public function singleProjectDone ($id){
        $navItems = Navbar::all();
        $project = project::where('id', $id)->first();
        return view('singleProjectDetails',['navbarItems'=>$navItems,'project'=>$project]);

    }


    // Dashboard Functionalities

    public function dashboard (){
        return view('cms.dashboard');
    }

    // Navbar Section

    public function navbarSection (){
        $navItems = Navbar::all();
        return view('cms.navbarsection',['navbarItems'=>$navItems]);
    }
    public function storeNavbarItems (Request $request){

        $data = new Navbar();
        $data->title = $request->title;
        $data->url = $request->url;

        $data->save();

        return back()->with('message','Navbar Items Added');
    }

    // Home Hero Conetent

    public function heroSection (){
        $heroContent = HomeHero::all();
        return view('cms.homehero',['heroContent'=>$heroContent]);
    }

    public function storeHeroContent (Request $request){

        $recordId = 1;
        $data = HomeHero::where('record_id', $recordId)->first();

        if ($data) {
            // Update the existing record
            $data->fill($request->all()); // Assuming all fields can be updated
            $data->save();
            $message = 'Record updated';
        } else {
            // Create a new record
            $data = new HomeHero();
            $data->fill($request->all()); // Assuming all fields can be filled
            $data->save();
            $message = 'Record created';
        }


        return back()->with('message', $message);



    }


    // About Content

    public function aboutContent (){
        $aboutContent =  About::all();
        return view('cms.aboutcontent',['about'=>$aboutContent]);
    }

    public function storeAboutContent (Request $request){

        $recordId = 1;
        $data = About::where('record_id', $recordId)->first();

        if ($data) {
            // Update the existing record
            $data->fill($request->all()); // Assuming all fields can be updated
            $data->save();
            $message = 'Record updated';
        } else {
            // Create a new record
            $data = new About();
            $data->fill($request->all()); // Assuming all fields can be filled
            $data->save();
            $message = 'Record created';
        }


        return back()->with('message', $message);



    }


    // Why choose us Conetent

    public function whyus (){
        $whyusContent = Whyus::all();
        return view('cms.whyus',['whyusContent'=>$whyusContent]);
    }

    public function storeWhyusContent (Request $request){
        $data = new Whyus();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('message','Record Saved');
    }

    // Testimonials Conetent

    public function testimonialsContent (){
        $testimonials = Testimonial::all();
        return view('cms.testimonials',['testimonials'=>$testimonials]);
    }

    public function storeTestimonialsContent (Request $request){
        $data = new Testimonial();
        $data->name = $request->name;
        $data->business = $request->business;
        $data->description = $request->description;
        $data->save();

        return back()->with('message','Record Saved');
    }

    // Frequenetly Asked Questions Conetent

    public function faqContent (){
        $faqs = Faq::all();
        return view('cms.faqs',['faqs'=>$faqs]);
    }

    public function storeFaqContent (Request $request){
        $data = new Faq();
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->save();

        return back()->with('message','Record Saved');
    }

    // Frequenetly Asked Questions Conetent

    public function contactContent (){
        $contacts = Contact::all();
        return view('cms.contacts',['contacts'=>$contacts]);
    }

    public function storeContactContent (Request $request){

        $recordId = 1;
        $data = Contact::where('record_id', $recordId)->first();
        // dd($recordId);

        if ($data) {
            // Update the existing record
            $data->fill($request->all()); // Assuming all fields can be updated
            $data->save();
            $message = 'Record updated';
        } else {
            // Create a new record
            $data = new Contact();
            $data->fill($request->all()); // Assuming all fields can be filled
            $data->save();
            $message = 'Record created';
        }

        return back()->with('message',$message);
    }


    // Services Conetent

    public function serviceCategoryContent (){
        $serviceCategory = ServiceCategory::all();
        $services = Service::all();
        return view('cms.servicescontent',['serviceCategory'=>$serviceCategory,'services'=>$services]);
    }

    public function storeServiceCategoryContent (Request $request){

        $data = new ServiceCategory();
        $data->services_title = $request->services_title;

        // Getting the uploaded image

        if($request->hasFile('service_image_path')){
            $image =$request->file('service_image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('services_images'), $imageName);

            // Save the image path in the database
            $data->service_image_path = 'services_images/' . $imageName;
        }

        if ($data->save()) {
            return back()->with('message', 'Record Was Saved');
        } else {
            return back()->withErrors('Failed to save record');
        }


    }
    public function storeServiceContent (Request $request){

        $data = new Service();
        $data->service_name = $request->service_name;
        $data->category_id = $request->category_id;
        $data->service_category = $request->service_category;

        if ($data->save()) {
            return back()->with('message', 'Record Was Saved');
        } else {
            return back()->withErrors('Failed to save record');
        }


    }


    // Services Conetent

    public function projectsContent (){
        $serviceCategory = ServiceCategory::all();
        $projects = project::all();
        return view('cms.projects',['serviceCategory'=>$serviceCategory,'projects'=>$projects]);
    }


    public function storeProjectContent (Request $request){

        $data = new project();
        $data->category_id = $request->category_id;
        $data->project_category = $request->service_category;
        $data->project_name = $request->project_name;
        $data->client_name = $request->client_name;
        $data->project_problem = $request->project_problem;
        $data->project_solution = $request->project_solution;
        $data->project_url = $request->project_url;

         // Getting the uploaded image

         if($request->hasFile('project_image_path')){
            $image =$request->file('project_image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('projects_images'), $imageName);

            // Save the image path in the database
            $data->project_image_path = 'projects_images/' . $imageName;
        }

        if ($data->save()) {
            return back()->with('message', 'Record Was Saved');
        } else {
            return back()->withErrors('Failed to save record');
        }


    }



}