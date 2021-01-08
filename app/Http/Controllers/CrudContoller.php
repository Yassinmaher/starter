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

    public function store(Request $request) {
//        Offer::create([
//            'name' => 'Offer4',
//            'price' => '3000',
//            'details' => 'Offer details'
//        ]);
        Offer::create([
            'name' => $request->name,
            'price'=>$request->price,
            'details'=>$request->details
        ]);
        return 'Data inserted Successfully';
    }

    public function create() {
        return view('offers.create');
    }

}
