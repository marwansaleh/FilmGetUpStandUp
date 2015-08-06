<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    function index(){
        return view('home', $this->data);
    }
}
