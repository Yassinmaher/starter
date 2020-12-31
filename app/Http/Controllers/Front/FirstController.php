<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    //  Home Function
    public function home () {
        return "Hello From  Home";
    }

    // Login Functoin
    public function login() {
        return 'Hello From Login';
    }
}
