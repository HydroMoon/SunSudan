<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsLetterController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    // Resource routes
    Route::resource('admin-news', NewsController::class)->except('show');

    // Dashboard
    Route::get('dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');
    
    // Media
    Route::get('media', [AdminController::class, 'showMedia'])->name('admin.media');
    Route::post('save-media', [AdminController::class, 'storeMedia'])->name('admin.media.store');
    Route::delete('del-media/{id}', [AdminController::class, 'delMedia'])->name('admin.media.destroy');
    
    // Events
    Route::get('event', [AdminController::class, 'showEvent'])->name('admin.event');
    Route::post('save-event', [AdminController::class, 'addEvent'])->name('admin.event.store');
    Route::delete('del-event/{id}', [AdminController::class, 'delEvent'])->name('admin.event.destroy');
    
    // Messages
    Route::get('messages', [AdminController::class, 'showMessages'])->name('admin.messages');
});


// Guest Routes
// News
Route::get('news', [GuestController::class, 'index'])->name('news');
Route::get('news/{slug}', [GuestController::class, 'getSingle'])->where('slug', '[\w\d\-\_]+')->name('news.single');

// Media
Route::get('media', [GuestController::class, 'showImages'])->name('media');

// Events
Route::get('events', [GuestController::class, 'getEvent'])->name('calendar');

// Message
Route::get('contact-us', function () { return view('contact-us'); })->name('contact-us');
Route::post('message', [GuestController::class, 'storeMessage'])->name('message');

// Email Subscribtion
Route::post('subscribe', [NewsLetterController::class, 'store'])->name('mail.sub');
// About
Route::get('about-us', function () { return view('about-us'); })->name('about-us');

// Home
Route::get('/', function () { return view('home'); })->name('home');

require __DIR__.'/auth.php';
