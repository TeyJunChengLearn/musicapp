<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignTestController extends Controller
{
    public function index(){
        return view("default_main");
    }
}
