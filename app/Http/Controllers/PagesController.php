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
use App\Models\Product;
use App\Models\Seo;

class PagesController extends Controller
{
    public function seoData(){

        $data = Seo::all();
        return view('cms.seo',['seo'=>$data]);
    }
    public function deleteSeoData($id){

        $data = Seo::find($id);
        $data->delete();

        return back()->with('message','Permanently Deleted');
    }

    public function editSeoData($id){

        $data = Seo::find($id);

        return view('cms.operations.editSeo',['seoData'=>$data]);
    }

    public function updateSeoData(Request $request){

        $seoData = Seo::find($request->id);
        $seoData->seo_page = $request->input('seo_page');
        $seoData->seo_title = $request->input('seo_title');
        $seoData->seo_description = $request->input('seo_description');
        $seoData->seo_keywords = $request->input('seo_keywords');

        $seoData->save();

        return back()->with('message','Updated Successfully');
    }

    public function storeSeoData(Request $request)
    {

        $seoData = new Seo();
        $seoData->seo_page = $request->input('seo_page');
        $seoData->seo_title = $request->input('seo_title');
        $seoData->seo_description = $request->input('seo_description');
        $seoData->seo_keywords = $request->input('seo_keywords');
        $seoData->save();

        return back()->with('message','Seo Data Added');
    }


    public function home (){
        $navItems = Navbar::all();
        $heroContent = HomeHero::first();
        $aboutContent = About::first();
        $whyusContent = whyus::all();
        $clientTestimonials = Testimonial::all();
        $faqContent = Faq::all();
        $products = Product::all();
        $serviceCategoryContent = ServiceCategory::all();
        $contactContent = Contact::first();
        $countWhyus = $whyusContent->count();
        $countProducts = $products->count();
        $countTestimonials = $clientTestimonials->count();
        $countFaqs = $faqContent->count();
        $countServiceCategory = $serviceCategoryContent->count();
        $categoriesWithServices = serviceCategory::with('services')->get();

        // SEO Data

        $seoData = Seo::where('seo_page','Home')->first();

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
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);
    }
    public function about (){
        $navItems = Navbar::all();
        $aboutContent = About::first();
        $products = Product::all();
        $contactContent = Contact::first();
        $whyusContent = whyus::all();
        $countProducts = $products->count();
        $countWhyus = $whyusContent->count();

        // SEO Data

        $seoData = Seo::where('seo_page','About')->first();

        return view('about',[
            'navbarItems'=>$navItems,
            'aboutContent'=>$aboutContent,
            'contacts'=>$contactContent,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'whyusContent'=>$whyusContent,
            'countWhyus'=>$countWhyus,
            'seoData'=>$seoData
        ]);
    }
    public function services (){
        $navItems = Navbar::all();
        $products = Product::all();
        $serviceCategoryContent = ServiceCategory::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();
        $countServiceCategory = $serviceCategoryContent->count();
        $categoriesWithServices = serviceCategory::with('services')->get();

        // SEO Data

        $seoData = Seo::where('seo_page','Services')->first();

        return view('services',[
            'navbarItems'=>$navItems,
            'contacts'=>$contactContent,
            'serviceCategoryContent'=>$serviceCategoryContent,
            'categoriesWithServices'=>$categoriesWithServices,
            'countServiceCategory'=>$countServiceCategory,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);

    }
    public function projectsList (){
        $navItems = Navbar::all();
        $products = Product::all();
        $serviceCategoryContent = ServiceCategory::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();
        $countServiceCategory = $serviceCategoryContent->count();


        // SEO Data

        $seoData = Seo::where('seo_page','Projects')->first();

        return view('projectslist',[
            'navbarItems'=>$navItems,
            'contacts'=>$contactContent,
            'serviceCategoryContent'=>$serviceCategoryContent,
            'countServiceCategory'=>$countServiceCategory,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);

    }
    public function testimonials (){
        $navItems = Navbar::all();
        $clientTestimonials = Testimonial::all();
        $products = Product::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();
        $countTestimonials = $clientTestimonials->count();



        // SEO Data

        $seoData = Seo::where('seo_page','Testimonials')->first();

        return view('testimonials',[
            'navbarItems'=>$navItems,
            'clientTestimonials'=>$clientTestimonials,
            'contacts'=>$contactContent,
            'countTestimonials'=>$clientTestimonials,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);

    }
    public function faq (){
        $navItems = Navbar::all();
        $faqContent = Faq::all();
        $products = Product::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();
        $countFaqs = $faqContent->count();


        // SEO Data

        $seoData = Seo::where('seo_page','Faq')->first();

        return view('faq',[
            'navbarItems'=>$navItems,
            'contacts'=>$contactContent,
            'faqContent'=>$faqContent,
            'countFaqs'=> $countFaqs,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);
    }
    public function contact (){
        $navItems = Navbar::all();
        $products = Product::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();



        // SEO Data

        $seoData = Seo::where('seo_page','Contact')->first();

        return view('contact',[
            'navbarItems'=>$navItems,
            'contacts'=>$contactContent,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);
    }
    public function projectsDone ($id){
        $navItems = Navbar::all();
        $products = Product::all();
        $serviceCategoryContent = ServiceCategory::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();
        $countServiceCategory = $serviceCategoryContent->count();
        $categoriesWithServices = serviceCategory::with('services')->get();

        // SEO Data

        $seoData = Seo::where('seo_page','Testimonials')->first();

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
            'contacts'=>$contactContent,
            'serviceCategoryContent'=>$serviceCategoryContent,
            'categoriesWithServices'=>$categoriesWithServices,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
            ]);
        }
        else {
           return back()->with('error','No projects found');
        }

    }
    public function singleProjectDone ($id){
        $navItems = Navbar::all();
        $project = project::where('id', $id)->first();
        $products = Product::all();
        $serviceCategoryContent = ServiceCategory::all();
        $contactContent = Contact::first();
        $countProducts = $products->count();
        $categoriesWithServices = serviceCategory::with('services')->get();

        // SEO Data

        $seoData = Seo::where('seo_page','Projects')->first();

        return view('projectsSinglePage',[
            'navbarItems'=>$navItems,
            'contacts'=>$contactContent,
            'serviceCategoryContent'=>$serviceCategoryContent,
            'categoriesWithServices'=>$categoriesWithServices,
            'countServiceCategory'=>$countServiceCategory,
            'products'=>$products,
            'countProducts'=>$countProducts,
            'seoData'=>$seoData
        ]);


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

    public function deletenavitems ($id){

        $data = Navbar::find($id);
        $data->delete();

        return back()->with('message','Deleted Permanently');
    }

    public function editnavitems ($id){

         $data = Navbar::find($id);
         return view('cms.operations.editNavbar',['navbaritem'=>$data]);
    }

    public function updatenavitems (Request  $request){

        $data = Navbar::find($request->id);
        $data->title = $request->title;
        $data->url = $request->url;
        $data->save();

        return back()->with('message', 'Record Updated');
    }

    // Home Hero Conetent

    public function heroSection (){
        $heroContent = HomeHero::all();
        return view('cms.homehero',['heroContent'=>$heroContent]);
    }

    public function deleteHero ($id){

        $data = HomeHero::find($id);
        $data->delete();

        return back()->with('message','Deleted Permanently');
    }

    public function editHero ($id){

        $data = HomeHero::find($id);

        return view('cms.operations.editHero',['hero'=>$data]);
    }

    public function updateHero (Request $request){

        $data = HomeHero::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('message', 'Record Updated');
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

    public function deleteAbout ($id){
        $data =  About::find($id);
        $data->delete();

        return back()->with('message', 'Deleted Permanently');
    }

    public function editAbout ($id){
        $data =  About::find($id);
        return view('cms.operations.editAbout',['about'=>$data]);
    }

    public function updateAbout (Request $request){

        $data =  About::find($request->id);
        $data->description = $request->description;
        $data->save();

        return back()->with('message', 'Record Updated');
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

    public function deleteWhyus ($id){

        $data = Whyus::find($id);
        $data->delete();

        return back()->with('message', 'Deleted Permanently');
    }

    public function editWhyus ($id){

        $data = Whyus::find($id);
        return view('cms.operations.editWhyus',['whyus'=>$data]);
    }

    public function updateWhyus (Request $request){

        $data = Whyus::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('message', 'Deleted Permanently');
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

    public function deleteTesty ($id){

        $data = Testimonial::find($id);
        $data->delete();

        return back()->with('message','Deleted Permanently');
    }

    public function editTesty ($id){

        $data = Testimonial::find($id);

        return view('cms.operations.editTesty',['testy'=>$data]);
    }

    public function updateTesty (Request $request){

        $data = Testimonial::find($request->id);
        $data->name = $request->name;
        $data->business = $request->business;
        $data->description = $request->description;
        $data->save();

        return back()->with('message','Record Updated');
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

    public function deleteFaq($id){

        $faqs = Faq::find($id);
        $faqs->delete();

        return back()->with('message','Deleted Permanently');
    }

    public function editFaq($id){

        $faqs = Faq::find($id);
        return view('cms.operations.editFaq',['faq'=>$faqs]);
    }

    public function updateFaq(Request $request){

        $faqs = Faq::find($request->id);
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->save();

        return back()->with('message','Record Updated');
    }

    public function storeFaqContent (Request $request){
        $data = new Faq();
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->save();

        return back()->with('message','Record Saved');
    }

    // Contact Conetent

    public function contactContent (){
        $contacts = Contact::all();
        return view('cms.contacts',['contacts'=>$contacts]);
    }

    public function deleteContact ($id){

        $contacts = Contact::find($id);
        $contacts->delete();

        return back()->with('message','Deleted Permanently');
    }

    public function editContact ($id){

        $contacts = Contact::find($id);

        return view('cms.operations.editContact',['contact'=>$contacts]);
    }

    public function updateContact (Request $request){

        $contacts = Contact::find($request->id);
        $contacts->address =$request->address;
        $contacts->phone =$request->phone;
        $contacts->email =$request->email;
        $contacts->opening_days =$request->opening_days;
        $contacts->opening_hours =$request->opening_hours;
        $contacts->save();

        return back()->with('message','Record Updated');
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
    public function deleteService ($id){
        $serviceCategory = ServiceCategory::find($id);
        $filePath = $serviceCategory->service_image_path;
        $serviceCategory->delete();
        // Unlinking the file
        if(file_exists($filePath)){
            unlink($filePath);
        }


        return back()->with('message','Deleted Permanently');
    }

    public function editService ($id){
        $services = ServiceCategory::find($id);
        return view('cms.operations.editService',['service'=>$services]);

    }

    public function updateService(Request $request)
    {
        // Find the service category data to update
        $data = ServiceCategory::find($request->id);

        // Update the services title
        $data->services_title = $request->services_title;

        // Check if a new file is provided
        if ($request->hasFile('service_image_path')) {
            // Remove the old file if it exists
            if (file_exists(public_path($data->service_image_path))) {
                unlink(public_path($data->service_image_path));
            }

            // Upload the new file
            $image = $request->file('service_image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('services_images'), $imageName);

            // Save the new file path in the database
            $data->service_image_path = 'services_images/' . $imageName;
        }

        // Save the updated data
        $data->save();

        // Redirect back with a success message
        return back()->with('message', 'Record Updated');
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
    public function deleteSubservice ($id){

        $data = Service::find($id);
        $data->delete();

        return back()->with('message', 'Deleted Permanently');


    }
    public function editSubservice ($id){

        $data = Service::find($id);
        $serviceCategory = ServiceCategory::all();

        return view('cms.operations.editSubservices',['serviceCategory'=>$serviceCategory,'subservice'=>$data]);


    }

    public function updateSubservice (Request $request){

        $data = Service::find($request->id);
        $data->service_name = $request->service_name;
        $data->category_id = $request->category_id;
        $data->service_category = $request->service_category;

        if ($data->save()) {
            return back()->with('message', 'Record Was updated');
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


    // Projects Conetent

    public function deleteProject ($id){
        $projects = project::find($id);
        $projects->delete();

        return back()->with('message', 'Permanently Deleted');

    }

    public function projectsContent (){
        $serviceCategory = ServiceCategory::all();
        $projects = project::all();
        return view('cms.projects',['serviceCategory'=>$serviceCategory,'projects'=>$projects]);
    }

    public function editProject ($id){
        $serviceCategory = ServiceCategory::all();
        $projects = project::find($id);
        return view('cms.operations.editProjects',['serviceCategory'=>$serviceCategory,'projects'=>$projects]);
    }

    public function updateProject (Request $request){

        $data = project::find($request->id);
        $data->category_id = $request->category_id;
        $data->project_category = $request->service_category;
        $data->project_name = $request->project_name;
        $data->project_url = $request->project_url;

         // Check if a new file is provided
         if ($request->hasFile('project_image_path')) {
            // Remove the old file if it exists
            if (file_exists(public_path($data->project_image_path))) {
                unlink(public_path($data->project_image_path));
            }

            // Upload the new file
            $image = $request->file('project_image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('services_images'), $imageName);

            // Save the new file path in the database
            $data->project_image_path = 'services_images/' . $imageName;
        }

        // Save the updated data
        $data->save();

        // Redirect back with a success message
        return back()->with('message', 'Record Updated');

    }


    public function storeProjectContent (Request $request){

        $data = new project();
        $data->category_id = $request->category_id;
        $data->project_category = $request->service_category;
        $data->project_name = $request->project_name;
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

      // Products Conetent

      public function productLinks  (){

        $products = Product::all();
        $countProducts = $products->count();
        return view('cms.products',['countProducts'=>$countProducts,'products'=>$products]);
    }

    public function deleteProduct  ($id){

        $products = Product::find($id);
        $products->delete();

        return back()->with('message', 'Deleted Permanently');
    }

    public function editProduct  ($id){

        $products = Product::find($id);

        return view('cms.operations.editProduct',['product'=>$products]);
    }

    public function updateProduct  (Request $request){

        $products = Product::find($request->id);
        $products->product_name = $request->product_name;
        $products->product_link = $request->product_link;
        $products->save();

        return back()->with('message', 'Record Updated');
    }

    public function storeProductLinks (Request $request){

        $data = new Product();
        $data->product_name = $request->product_name;
        $data->product_link = $request->product_link;

        if ($data->save()) {
            return back()->with('message', 'Record Was Saved');
        } else {
            return back()->withErrors('Failed to save record');
        }


    }



}
