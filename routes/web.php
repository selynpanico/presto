<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementsController;

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

Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/show/{announcement}', [AnnouncementsController::class,'show'])->name('announcement.show');
Route::get('/category/{category}', [AnnouncementsController::class,'showCategory'])->name('category.show');
Route::get('/make-revisor/{user}',[PublicController::class ,'makeRevisor'])->name('make.revisor');


// Rotte con middleware auth
Route::middleware('auth')->group(function(){
    Route::get('/nuovo/annuncio', [AnnouncementsController::class, 'createAnnouncement'])->name('announcements.create'); 
    Route::get('/became-revisor', [PublicController::class , 'requestRevisor'])->name('became.revisor');
});    
    


