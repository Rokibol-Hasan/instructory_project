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
    return view('home',[
        'page_name' => 'Home Page',
        'course_name' => 'Laravel 10',
    ]);
})->name('home');

Route::get('/about-us', function () {
    return view('about',[
        'page_name' => 'About Page',
    ]);
})->name('about');

Route::get('/contact', function () {
    $page_name = "Contact Page";
    $product_count = 20;
    $color = "";
    return view('contact',compact('page_name','product_count','color'));
})->name('contact');

Route::get('/service', function () {
    $page_name = "Service Page";

    $services = [
        'Web Design',
        'Web Development',
        'Graphics Design',
        'SEO',
        'Networking',
    ];
    return view('service',compact('page_name','services'));
})->name('service');








// Route::get('users/{id}/{name}', function ($id,$name) {
//     echo $id.' '.$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/category/{category_id}/{category_name}', function($category_id,$category_name){
//     echo $category_id." ".$category_name;
// })->whereIn('category_name', ['apple','banana']);
