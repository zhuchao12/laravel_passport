<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function aaa(Request $request){
        $is_login = $request->get('is_login');
        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $info = [
            'url'   =>  urlencode($url),
            'is_login'  =>  $is_login
        ];
        return view('welcome',$info);
    }
}