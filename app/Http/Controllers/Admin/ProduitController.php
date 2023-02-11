<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// use App\Http\Produit;
class ProduitController extends Controller
{
    public function index()
    {
        $produit = Produit::all();
        return view('admin.produit.index', compact('produit'));
    }
    public function add()
    {
        $category = Category::all();

        return view('admin.produit.add',compact('category') );
    }
}
