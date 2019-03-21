<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;


class TestController extends Controller
{
    public function reg(){
        // echo 111;exit;
        return view('test.reg');
    }

    public function login(){
        return view('test.login');
    }
}