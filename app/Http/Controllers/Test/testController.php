<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\Controller;


class testController extends Controller
{
    public function __construct(){
        $this-> middleware('auth')->except('index','showText');
    }
    public function show(){
        return 'Welcome';
    }

        public function index(){
        return view('test');
    }
        public function showText(){
        return env('APP_PROGRAMER');
    }
}
