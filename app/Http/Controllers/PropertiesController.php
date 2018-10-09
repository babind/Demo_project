<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use DB;


class PropertiesController extends Controller
{
    public function search(Request $request)
    {
    	$property = DB::table('properties');

    	if ($this->exists($request->input('name'))) {
            $property->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($this->exists($request->input('bedrooms'))) {
            $property->where('bedrooms', $request->input('bedrooms'));     
        }

        if ($this->exists($request->input('bathrooms'))) {
            $property->where('bathrooms', $request->input('bathrooms'));
        }

        if ($this->exists($request->input('storeys'))) {
            $property->where('storeys', $request->input('storeys'));
        }

        if ($this->exists($request->input('garages'))) {
            $property->where('garages', $request->input('garages'));
        }

        if ($this->exists($request->input('min_price'))) {
            $property->where('price', '>=', $request->input('min_price'));
        }

        if ($this->exists($request->input('max_price'))) {
            $property->where('price', '<=', $request->input('max_price'));
        }

        return response()->json($property->get());
    }

    private function exists($param) {
    	return !($param == '' || $param == null);
    }
}
