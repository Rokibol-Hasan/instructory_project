<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {

    // return response($data)
    //     ->header('Content-Type', 'application/json')
    //     ->cookie('My_IDcard','Rakib',3600);

    dd($request->all());

    return view('home', [
        'page_name' => 'Home Page',
        'course_name' => 'Laravel 10 Master Course'
    ]);
})->name('home');




Route::get('/about-us', function () {
    return view('about', [
        'page_name' => 'About Page',
    ]);
})->name('about');

Route::get('/contact', function () {
    $page_name = "Contact Page";
    $products = [
        1 => [
            'product_name' => 'Polo Shirt',
            'color' => 'Green',
            'price' => '$250',
        ],
        2 => [
            'product_name' => 'Sun Glass',
            'color' => 'Black',
            'price' => '$40',
        ],
    ];

    $product_count = count($products);
    $color = "";
    return view('contact', compact('page_name', 'product_count', 'color', 'products'));
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
    return view('service', compact('page_name', 'services'));
})->name('service');


Route::get('/send_me_details', function (Request $request) {
    $secret_key = 9235;
    $user_key = $request->user_key;

    $data = [
        'name' => 'Rakib',
        'secret_key' => '9235',
        'mobile_number' => '01885794485',
    ];

    if ($secret_key == $user_key) {
        return response()->json([
            'Details' => $data,
        ]);
    } else {
        return response([
            'Message' => 'Information invalid'
        ], 400);
    }
});






// Route::get('users/{id}/{name}', function ($id,$name) {
//     echo $id.' '.$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/category/{category_id}/{category_name}', function($category_id,$category_name){
//     echo $category_id." ".$category_name;
// })->whereIn('category_name', ['apple','banana']);
