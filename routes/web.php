<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ara-projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/contact-ara', [HomeController::class, 'contact'])->name('contact');
Route::get('/about-ara', [HomeController::class, 'about'])->name('about');
Route::get('/project-details', [HomeController::class, 'projectDetails'])->name('projectdetails');
Route::get('/ara-services', [HomeController::class, 'services'])->name('services');