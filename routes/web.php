<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\login;
use App\Http\Controllers\ContactController;


// Website Pages Routes

Route::get('/',[PagesController::class,'home'])->name('homepage');
Route::get('about',[PagesController::class,'about'])->name('aboutpage');
Route::get('services',[PagesController::class,'services'])->name('servicespage');
Route::get('projects',[PagesController::class,'projectsList'])->name('projectspage');
Route::get('testimonials',[PagesController::class,'testimonials'])->name('testimonialspage');
Route::get('faq',[PagesController::class,'faq'])->name('faqpage');
Route::get('projects-done/{id}',[PagesController::class,'projectsDone'])->name('projects-done-page');
Route::get('contact',[PagesController::class,'contact'])->name('contactpage');

// Contact Form

Route::post('contact-message',[ContactController::class,'contactUs'])->name('contact-us');

// SEO Data Routes

Route::get('seopage',[PagesController::class,'seoData'])->name('seo-page');
Route::post('store-seo-data',[PagesController::class,'storeSeoData'])->name('store-seo-data');
Route::get('delete-seo-data/{id}',[PagesController::class,'deleteSeoData'])->name('delete-seo-data');
Route::get('edit-seo-data/{id}',[PagesController::class,'editSeoData'])->name('edit-seo-data');
Route::post('update-seo-data',[PagesController::class,'updateSeoData'])->name('update-seo-data');


Route::get('admin',[login::class,'login'])->name('login');
Route::get('dashboard',[dashboard::class,'dashboard'])->name('dashboard');
Route::get('/logout',[login::class,'logoutUser'])->name('logout-user');
Route::post('user-login', [login::class, 'authUser'])->name('auth-user');

// Dashboard Functionalities

Route::middleware('auth')->group(function () {

                               // Navbar Routes

Route::get('navbarsection',[PagesController::class,'navbarSection'])->name('navbar-section');
Route::post('store-navbar-items',[PagesController::class,'storeNavbarItems'])->name('store-navbar-items');
Route::get('delete-content/{id}',[PagesController::class,'deletenavitems'])->name('deletenavitems');
Route::get('edit-content/{id}',[PagesController::class,'editnavitems'])->name('edit-navbar-item');
Route::post('update-content',[PagesController::class,'updatenavitems'])->name('update-navbar-item');


                                // Home Hero Routes

Route::get('home-hero-section',[PagesController::class,'heroSection'])->name('home-hero-section');
Route::post('store-hero-content',[PagesController::class,'storeHeroContent'])->name('store-hero-content');
Route::get('delete-hero/{id}',[PagesController::class,'deleteHero'])->name('delete-hero');
Route::get('edit-hero/{id}',[PagesController::class,'editHero'])->name('edit-hero');
Route::post('update-hero',[PagesController::class,'updateHero'])->name('update-hero');

                               //About Section Routes

Route::get('about-content',[PagesController::class,'aboutContent'])->name('about-content');
Route::post('store-about-content',[PagesController::class,'storeAboutContent'])->name('store-about-content');
Route::get('delete-about/{id}',[PagesController::class,'deleteAbout'])->name('delete-about');
Route::get('edit-about/{id}',[PagesController::class,'editAbout'])->name('edit-about');
Route::post('update-about',[PagesController::class,'updateAbout'])->name('update-about');

                                // Why choose us Routes

Route::get('why-us',[PagesController::class,'whyus'])->name('why-us');
Route::post('store-whyus-content',[PagesController::class,'storeWhyusContent'])->name('store-whyus-content');
Route::get('delete-whyus/{id}',[PagesController::class,'deleteWhyus'])->name('delete-whyus');
Route::get('edit-whyus/{id}',[PagesController::class,'editWhyus'])->name('edit-whyus');
Route::post('update-whyus',[PagesController::class,'updateWhyus'])->name('update-whyus');

                                // Client Testimonials Routes

Route::get('client-testimonials',[PagesController::class,'testimonialsContent'])->name('testimonials-content');
Route::post('store-testimonials-content',[PagesController::class,'storeTestimonialsContent'])->name('store-testimonials-content');
Route::get('delete-testy/{id}',[PagesController::class,'deleteTesty'])->name('delete-testy');
Route::get('edit-testy/{id}',[PagesController::class,'editTesty'])->name('edit-testy');
Route::post('update-testy',[PagesController::class,'updateTesty'])->name('update-testy');


                                // FAQs Routes

Route::get('faq-content',[PagesController::class,'faqContent'])->name('faq-content');
Route::post('store-faq-content',[PagesController::class,'storeFaqContent'])->name('store-faq-content');
Route::get('delete-faq/{id}',[PagesController::class,'deleteFaq'])->name('delete-faq');
Route::get('edit-faq/{id}',[PagesController::class,'editFaq'])->name('edit-faq');
Route::post('update-faq',[PagesController::class,'updateFaq'])->name('update-faq');


                                //Contact Us Routes

Route::get('contact-content',[PagesController::class,'contactContent'])->name('contact-content');
Route::post('store-contact-content',[PagesController::class,'storeContactContent'])->name('store-contact-content');
Route::get('delete-contact/{id}',[PagesController::class,'deleteContact'])->name('delete-contact');
Route::get('edit-contact/{id}',[PagesController::class,'editContact'])->name('edit-contact');
Route::post('update-contact',[PagesController::class,'updateContact'])->name('update-contact');

                                //Services Routes

Route::get('service-category-content',[PagesController::class,'serviceCategoryContent'])->name('service-category-content');
Route::post('store-service-category-content',[PagesController::class,'storeServiceCategoryContent'])->name('store-service-category-content');
Route::get('delete-services/{id}',[PagesController::class,'deleteService'])->name('delete-service');
Route::get('edit-services/{id}',[PagesController::class,'editService'])->name('edit-service');
Route::post('update-services',[PagesController::class,'updateService'])->name('update-service');

                               // Sub Services Routes
Route::post('store-subservice',[PagesController::class,'storeServiceContent'])->name('store-subservice');
Route::get('delete-subservices/{id}',[PagesController::class,'deleteSubservice'])->name('delete-subservice');
Route::get('edit-subservices/{id}',[PagesController::class,'editsubService'])->name('edit-subservice');
Route::post('update-subservices',[PagesController::class,'updatesubService'])->name('update-subservice');

                               // Projects Routes

Route::get('projects-content',[PagesController::class,'projectsContent'])->name('projects-content');
Route::post('store-project-content',[PagesController::class,'storeProjectContent'])->name('store-project-content');
Route::get('delete-project/{id}',[PagesController::class,'deleteProject'])->name('delete-project');
Route::get('edit-project/{id}',[PagesController::class,'editProject'])->name('edit-project');
Route::post('update-project',[PagesController::class,'updateProject'])->name('update-project');

                               // Products Routes

Route::get('product_links',[PagesController::class,'productLinks'])->name('product-links');
Route::post('store-product-links',[PagesController::class,'storeProductLinks'])->name('store-product-links');
Route::get('delete-product/{id}',[PagesController::class,'deleteProduct'])->name('delete-product');
Route::get('edit-product/{id}',[PagesController::class,'editProduct'])->name('edit-product');
Route::post('update-product',[PagesController::class,'updateProduct'])->name('update-product');

});
