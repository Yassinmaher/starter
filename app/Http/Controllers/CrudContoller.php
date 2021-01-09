<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudContoller extends Controller
{
    public function getOffers() {
//        return Offer::get();
        return Offer::select('name', 'price')->get();
    }

    public function store(Request $request) {

        $rules = $this -> getRules();
        $messages =$this -> getMessages();
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return $validator->errors();
        }

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

    protected function getRules() {
        return [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
    }

    protected function getMessages() {
        return [
            'name.required' => 'Sorry Offer Name Is Required',
            'name.max' => 'Sorry The Maximum Length Is 100',
            'name.unique' => 'Sorry This Name Is Taken Already',
            'price.required' => 'Sorry Price Is Required',
            'price.numeric' => 'Sorry The Only Allowed Data Type Is Number',
            'details.required' => 'Sorry Details Is Required',
        ];
    }

}
