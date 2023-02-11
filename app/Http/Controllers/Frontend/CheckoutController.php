<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OderItem;
use App\Models\User;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_CartItems = Cart::where('user_id',Auth::id())->get();
        foreach($old_CartItems as $item)
        {
            if(!Product::where('id',$item->prod_id)->where('quantite','>=',$item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }

        }
        $CartItems = Cart::where('user_id',Auth::id())->get();
        $produit = Cart::where('user_id',Auth::id())->get();
        $prix_total = 0;
        foreach($produit as $prod)
        {

             $prix_total += $prod->produits->selling_price * $prod->prod_qty;
        }

        return view('frontend.checkout',compact('CartItems','prix_total'));
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->noms = $request->input('noms');
        $order->prenoms = $request->input('prenoms');
        $order->email = $request->input('email');
        $order->number = $request->input('number');
        $order->addresse1 = $request->input('addresse1');
        $order->addresse2 = $request->input('addresse2');
        $order->ville = $request->input('ville');
        $order->residence = $request->input('residence');
        $order->pays = $request->input('pays');
        $order->codepin = $request->input('codepin');
        $order->tracking_no = 'sharma'.rand(1111,9999);
        // $order->payement_mode = $request->input('payement_mode');
        // $order->payement_id = $request->input('payement_id');

        // Calcul du prix total
        $total = 0;
        $CartItems_total = Cart::where('user_id',Auth::id())->get();

        foreach($CartItems_total as $prod)
            {

                // $qte = $prod->quantite = $prod->quantite;

                // $total=$prod->produits->price;

            }

         $order->prix_total = $prod->produits->selling_price*$prod->prod_qty;
        $order->tracking_no = 'client'.rand(1111,9999);
        $order->save();



        $CartItems = Cart::where('user_id',Auth::id())->get();
        $total = 0;
        foreach($CartItems as $item)
        {
            OderItem::create([
                'order_id' =>$order->id,
                'prod_id' =>$item->prod_id,
                'quantite' =>$item->prod_qty,
                'price' =>$item->produits->selling_price,
                'totall'=>$item->produits->selling_price*$item->prod_qty,
            ]);
             $total += $item->prod_qty * $prod->quantite;

             $prod = Product::where('id',$item->prod_id)->first();
             $prod->quantite = $prod->quantite - $item->prod_qty;
             $prod->update();
        }
        if(Auth::user()->addresse1 == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->noms = $request->input('noms');
            $user->prenoms = $request->input('prenoms');
            $user->phone = $request->input('number');
            $user->address1 = $request->input('addresse1');
            $user->address2 = $request->input('addresse2');
            $user->ville = $request->input('ville');
            $user->state = $request->input('residence');
            $user->pays = $request->input('pays');
            $user->pincode = $request->input('codepin');
            $user->update();

        }

        $CartItems = Cart::where('user_id',Auth::id())->get();

        Cart::destroy($CartItems);

        return redirect('/')->with('status', "mise a jour effectuée avec success");
    }
}


