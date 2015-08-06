<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $data = array();
    
    function __construct() {
        $this->data['APP_NAME'] = 'Film Get Up Stand Up';
    }
}
