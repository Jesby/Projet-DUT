<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::id())->get();
        return view('frontend.order.index',compact('orders'));
    }

    public function view($id)
    {
        $order = Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.order.view',compact('order'));
    }
}
