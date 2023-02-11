<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function users()
    {
        $user = User::all();
        return view('admin.users.index',compact('user'));
    }

    public function viewusers($id)
    {
         $user = User::find($id);
         return view('admin.users.view',compact('user'));
    }
}
