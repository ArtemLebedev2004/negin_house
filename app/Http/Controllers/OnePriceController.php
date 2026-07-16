<?php

namespace App\Http\Controllers;

use App\Models\OnePrice;
use Illuminate\Http\Request;

class OnePriceController extends Controller
{
    public function index()
    {
        $price = OnePrice::all()->first();

        return $price;
    }

    public function update(Request $request, OnePrice $price)
    {
        $price->update($request->all());        
    }
}
