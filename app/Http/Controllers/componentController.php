<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class componentController extends Controller
{
    public function searchProd($name){
        $produits = Product::where('name', 'LIKE', '%'.$name.'%')->get();
        return view('layouts.components.listproduit', [
            'produits' => $produits
        ]);
    }
}
