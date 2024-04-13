<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Website Pages Routes

Route::get('/',[PagesController::class,'home'])->name('homepage');
Route::get('about',[PagesController::class,'about'])->name('aboutpage');
Route::get('services',[PagesController::class,'services'])->name('servicespage');
Route::get('projects',[PagesController::class,'projectsList'])->name('projectspage');
Route::get('testimonials',[PagesController::class,'testimonials'])->name('testimonialspage');
Route::get('faq',[PagesController::class,'faq'])->name('faqpage');
Route::get('projects-done/{id}',[PagesController::class,'projectsDone'])->name('projects-done-page');
Route::get('contact',[PagesController::class,'contact'])->name('contactpage');


// Dashboard Functionalities

Route::get('dashboard',[PagesController::class,'dashboard'])->name('dashboard');

                               // Navbar Routes

Route::get('navbarsection',[PagesController::class,'navbarSection'])->name('navbar-section');
Route::post('store-navbar-items',[PagesController::class,'storeNavbarItems'])->name('store-navbar-items');
Route::get('delete-content/{id}',[PagesController::class,'deletenavitems'])->name('deletenavitems');
Route::get('edit-content/{id}',[PagesController::class,'editnavitems'])->name('edit-navbar-item');
Route::post('update-content',[PagesController::class,'updatenavitems'])->name('update-navbar-item');


                                // Home Hero Routes

Route::get('home-hero-section',[PagesController::class,'heroSection'])->name('home-hero-section');
Route::post('store-hero-content',[PagesController::class,'storeHeroContent'])->name('store-hero-content');

                               //About Section Routes

Route::get('about-content',[PagesController::class,'aboutContent'])->name('about-content');
Route::post('store-about-content',[PagesController::class,'storeAboutContent'])->name('store-about-content');

                                // Why choose us Routes

Route::get('why-us',[PagesController::class,'whyus'])->name('why-us');
Route::post('store-whyus-content',[PagesController::class,'storeWhyusContent'])->name('store-whyus-content');

                                // Client Testimonials Routes

Route::get('client-testimonials',[PagesController::class,'testimonialsContent'])->name('testimonials-content');
Route::post('store-testimonials-content',[PagesController::class,'storeTestimonialsContent'])->name('store-testimonials-content');


                                // FAQs Routes

Route::get('faq-content',[PagesController::class,'faqContent'])->name('faq-content');
Route::post('store-faq-content',[PagesController::class,'storeFaqContent'])->name('store-faq-content');

                                //Contact Us Routes

Route::get('contact-content',[PagesController::class,'contactContent'])->name('contact-content');
Route::post('store-contact-content',[PagesController::class,'storeContactContent'])->name('store-contact-content');

                                //Services Routes

Route::get('service-category-content',[PagesController::class,'serviceCategoryContent'])->name('service-category-content');
Route::post('store-service-category-content',[PagesController::class,'storeServiceCategoryContent'])->name('store-service-category-content');

                               // Projects Routes

Route::get('projects-content',[PagesController::class,'projectsContent'])->name('projects-content');
Route::post('store-project-content',[PagesController::class,'storeProjectContent'])->name('store-project-content');

                               // Products Routes

Route::get('product_links',[PagesController::class,'productLinks'])->name('product-links');
Route::post('store-product-links',[PagesController::class,'storeProductLinks'])->name('store-product-links');


