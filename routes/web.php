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
Route::get('about-us',[PagesController::class,'about'])->name('aboutpage');
Route::get('our-services',[PagesController::class,'services'])->name('servicespage');
Route::get('our-projects',[PagesController::class,'projectsList'])->name('projectspage');
Route::get('client-testimonials',[PagesController::class,'testimonials'])->name('testimonialspage');
Route::get('faq',[PagesController::class,'faq'])->name('faqpage');
Route::get('projects-done',[PagesController::class,'projectsDone'])->name('projects-done-page');
Route::get('single-project-done',[PagesController::class,'singleProjectDone'])->name('single-project-done-page');


// Dashboard Functionalities

Route::get('dashboard',[PagesController::class,'dashboard'])->name('dashboard');


