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

    //  Return Index File
    public function returnIndex() {
        $data = ['Ahmed', 'Yassin', 'Mohammed'];
//        $data['name']="Ahmed";
//        $data['age']=12;
        return view('welcome', compact('data'));
    }

}
