<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    public function adminPostTest( Request $request ) {
        $userData = [
            'name' => $request->userName,
            'age' => $request->userAge,
            'address' => $request->userAddress
        ];
        echo 'I am admin post Method';
        dd( $request->all(), $userData );
    }
}