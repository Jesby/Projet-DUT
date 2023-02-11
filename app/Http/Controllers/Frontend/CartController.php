<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addproduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty= $request->input('product_qty');

        if(Auth::check())
              {
                   $prod_check = Product::where('id',$product_id)->first();

                   if($prod_check)
                    {
                        $cartItem = new Cart();
                         if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                           {
                                return response()->json(['status'=>$prod_check->name." already Ajouter votre Cart"]);
                           }
                           else
                           {
                                $cartItem->prod_id = $product_id;
                                $cartItem->user_id = Auth::id();
                                $cartItem->prod_qty = $product_qty;
                                $cartItem->save();
                                return response()->json(['status'=>$prod_check->name."Ajouter votre Cart"]);
                           }
                    }
              }
              else
              {
                  return response()->json(['status'=> "connectez vous et continuer"]);
              }

    }

    public function viewcart()
    {
        $cartitem = Cart::where('user_id',Auth::id())->get();
        $prod = Product::where('trending','1')->take('10')->get();
        return view('frontend.cart',compact('cartitem','prod'));
    }

    public function updateproduit(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $produit_qty = $request->input('qtyinput');
        if(Auth::check())
        {
            if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $cart = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cart->prod_qty = $produit_qty;
                $cart->update();
                return response()->json(['status'=> "Quantite de produit modifier avec success"]);
            }
        }
    }

    public function deleteproduct(Request $request)
     {
        if(Auth::check())
        {
          $prod_id = $request->input('prod_id');

          if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())

              $cartItem = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
              $cartItem->delete();
              return response()->json(['status'=> "Produit supprimer avec success"]);
        }
        else
              {
                  return response()->json(['status'=> "connectez vous et continuer"]);
              }
     }

}
