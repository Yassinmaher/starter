<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class CrudContoller extends Controller
{
    public function getOffers() {
//        return Offer::get();
        return Offer::select('name', 'price')->get();
    }
}
