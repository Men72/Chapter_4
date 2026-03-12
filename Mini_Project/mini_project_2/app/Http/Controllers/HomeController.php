<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show()
    {
        return "Home Controller";
    }
    function add(){
        return "Add new Student";
    }
}
