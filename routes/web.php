<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\RevisorController;

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
    Route::get('/profile/{user}', [PublicController::class,'profile'])->name('profile');
});    

//Rotte con middleware revisore
Route::patch('/accetta-annuncio/{announcement}',[RevisorController::class, 'acceptAnnouncement'])->name('accept.announcement');
Route::patch('/rifiuta-annuncio/{announcement}',[RevisorController::class, 'rejectAnnouncement'])->name('reject.announcement');
Route::get('/revisor-panel',[RevisorController::class,'index'])->name('revisor-panel');
// Route::middleware('is_revisor')->group(function(){

// });
    


