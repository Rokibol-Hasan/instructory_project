<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home', ['page_name' => 'Home Page', 'course_name' => 'Laravel 10']);
    }

    public function about()
    {
        return view('about', [
            'page_name' => 'About Page',
        ]);
    }

    public function contact()
    {
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
    }

    public function service()
    {
        $page_name = "Service Page";

        $services = [
            'Web Design',
            'Web Development',
            'Graphics Design',
            'SEO',
            'Networking',
        ];
        return view('service', compact('page_name', 'services'));
    }

    public function sendMeDetails(Request $request){
        $secret_key = 9235;
        $user_key = $request->user_key;

        $data = [
            'name' => 'Rakib',
            'secret_key' => 9235,
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
    }

}
