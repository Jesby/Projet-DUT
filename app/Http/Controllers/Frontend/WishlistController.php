<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\liste;
use App\Models\Product;
use App\Models\Cart;

class WishlistController extends Controller
{
    public function index()
    {
        $liste = liste::where('user_id',Auth::id())->get();
        return view('frontend.wishlist',compact('liste'));
    }

    public function add(Request $request)
    {
        if(Auth::check())
        {
            $prod_id = $request->input('product_id');
            if(Product::find($prod_id))
            {
                $liste = new liste();
                $liste->prod_id =$prod_id;
                $liste->user_id = Auth::id();
                $liste->save();
                return response()->json(['status'=> "produits Ajouter"]); 
            }
            else{
                return response()->json(['status'=> "Pas de produits"]); 
            }
        }
        else{
            return response()->json(['status'=> "connectez vous ou inscrivez vous avant de continuer"]);
        }
    }
}
