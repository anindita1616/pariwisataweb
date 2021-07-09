<?php

use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('front.homepage');
});

Route::get('cari',[PageController::class, 'cari'])->name('cari');

// Tentang
Route::get('/tentang', function () {
    return view('front.tentang');
})->name('tentang');

Route::get('/redirects', [HomeController::class, 'redirects']);


//Route Admin Harus Login
Route::group(['middleware' => ['auth:sanctum']], function () {

});

Route::middleware(['auth', 'PageAccess:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

Route::middleware(['auth'])->group(function () {
    Route::resource('wisatas', WisataController::class);
    Route::resource('kuliners', KulinerController::class);
    Route::resource('penginapans', PenginapanController::class);
    Route::resource('events', EventController::class);

// Wisata
Route::get('/wisata', function () {
    return view('front.wisata');
})->name('wisata');;

// Kuliner
Route::get('/kuliner', function () {
    return view('front.kuliner');
})->name('kuliner');;

// Event
Route::get('/event', function () {
    return view('front.event');
})->name('event');;

// penginapan
Route::get('/penginapan', function () {
    return view('front.penginapan');
})->name('penginapan');;
});

Route::middleware(['auth', 'PageAccess:user'])->group(function () {

});