<?php

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

//Route::view('/pass','welcome',['key'=>'content']);

Route::view('about', 'front.about');

Route::view('home', 'home');

Route::get('user/{id}', function($id) {

    return 'User Id : '.$id;
});

Route::get('user/profile', function() {

    return view('user_profile');

})->name('profile');

//Route::post('main', 'mainController')->middleware('age');

