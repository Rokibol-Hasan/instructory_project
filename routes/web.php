<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/service', function () {
    return view('service');
})->name('service');








// Route::get('users/{id}/{name}', function ($id,$name) {
//     echo $id.' '.$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/category/{category_id}/{category_name}', function($category_id,$category_name){
//     echo $category_id." ".$category_name;
// })->whereIn('category_name', ['apple','banana']);
