<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return "Halaman awal website";
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return "Marbel Edu Games e Youkoso!";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "Marbel and Friends Kids Games!";
    });
    Route::get('/riri-story-books', function () {
        return "Riri Story Games!";
    });
    Route::get('/kolak-kids-songs', function () {
        return "Kolak Kids Songs!";
    });
});

Route::prefix('news')->group(function () {
    Route::get('', function () {
        return "Daftar Berita";
    });
    Route::get('/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19', function () {
        return "Bantuan untuk warga terdampak covid-19";
    });
    Route::get('/{link}', function ($link) {
        return "Error";
    });
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return "Karir";
    });
    Route::get('/magang', function () {
        return "Magang";
    });
    Route::get('/kunjungan-industri', function () {
        return "Kunjungan Industri";
    });
});

Route::get('/about-us', function () {
    return "About us";
});

Route::resource('contact-us', ContactController::class)->only([
    'index'
]);




