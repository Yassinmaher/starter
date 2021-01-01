<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FirstController;
use App\Http\Controllers\UsersController;


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

//  Route Group
Route::group(['prefix' => 'users'], function () {
    route::get('/', function () {
        return 'Hello From Users';
    });
    route::get('/tests', function() {
        return 'Hello From Users Test';
    });
});

// Route Namespace With Controller
Route::group(['prefix' => 'front', 'middleware'=>'auth'], function () {
    Route::get('/', [FirstController::class, 'home']);
    Route::get('/login', [FirstController::class, 'login']);
});

Route::get('login', function () {
    return "You Must Login First";
})->name('login');

// Route Resource
Route::resource('user', UsersController::class);

// Route Get View From Controller
Route::get('/index', [FirstController::class, 'returnIndex']);

// Route Landing Page
Route::view('/landing', 'landing');

// Route About Page
Route::view('/about', 'about');
