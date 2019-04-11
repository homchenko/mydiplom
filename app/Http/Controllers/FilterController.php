<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class FilterController extends Controller
{
    public function search(Request $request) {
     
        $categories = Category::all();

        $query = (new Product)->newQuery();

        if($request->has('fat')) {
            $products = $query->whereBetween('fat', array(0, $request->input('fat')))->get();
        }

        $value = $request->input('filter');
        if($request->has('filter')) {
            $products = $query->where(function ($query) use ($value) {
                $query->where('filter', $value);
            })->get();
        }


        return view('front.filter', compact('products', 'categories'));
    }
}
