<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function __invoke(Request $request)
    {
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
