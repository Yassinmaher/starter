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
    return view('welcome');
});

// Route Get Test
Route::get('/test1', function () {
    return "welcome";
});

// Route Parameters Required
Route::get('/test2/{id}', function ($id) {
    return "welcome" . $id;
});

// Route Parameters Optional
Route::get('/test3/{id?}', function ($id = "ahmed") {
    return "welcome" . $id;
});

// Routes With Name
Route::get('/test4', function () {
    return "Hello From Routes With Name";
})->name('test4');
