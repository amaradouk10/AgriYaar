<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(){
        $query=request()->input('query');
        $products= mshop_product::where('name','like','%$query%')-
        orWhere('description','like','%$query%')->paginate(4);
        return view('products.search')->with('products','$products');
    }
}
