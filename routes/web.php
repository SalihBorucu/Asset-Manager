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
    return view('index');
});

Route::get('/data/{data}', function ($data){
    return response()->json(file_get_contents(public_path("data/$data")));
});

Route::get('/{view}', function ($view) {
    return view($view);
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
