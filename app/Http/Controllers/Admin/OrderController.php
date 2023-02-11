<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function order()
    {
        $orders = Order::where('status','0')->get();
        return view ('admin.orders.index',compact('orders'));
    }

    public function view($id)
    {
        $order = Order::where('id',$id)->first();
        return view('admin.orders.view',compact('order'));
    }

    public function updateorder(Request $request, $id)
    {
        $order = Order::find($id);

        $order->status = $request->input('status-order');
        $order->update();
        return redirect('orders')->with('status',"Historiques mise a jour avec success");
    }

    public function orderhistory()
    {
        $order = Order::where('status','1')->get();
        return view ('admin.orders.histo',compact('order'));
    }
}
