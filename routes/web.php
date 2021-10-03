<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\NewsController;
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
Route::resource('admin-news', NewsController::class);
Route::get('messages', [AdminController::class, 'showMessages'])->name('admin.messages');

Route::get('news', [GuestController::class, 'index'])->name('news');
Route::get('news/{slug}', [GuestController::class, 'getSingle'])->where('slug', '[\w\d\-\_]+')->name('news.single');

Route::post('message', [GuestController::class, 'storeMessage'])->name('message');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('edit', function () {
    return view('admin.edit-news');
});

Route::get('calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

require __DIR__.'/auth.php';
