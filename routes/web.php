<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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


Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/recent-events',[FrontController::class,'events'])->name('recent-events');
Route::get('/upcoming-events',[FrontController::class,'upcomingevents'])->name('upcoming-events');
Route::get('/courses-offered',[FrontController::class,'coursesoffered'])->name('courses-offered');
Route::get('/faculty-members',[FrontController::class,'facultymembers'])->name('faculty-members');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
