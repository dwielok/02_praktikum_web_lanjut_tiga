<?php

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
    echo "Ini adalah Home";
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Ini halaman Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo "Ini halaman Marbel And Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Ini halaman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Ini halaman Kolak Kids Songs";
    });
});
