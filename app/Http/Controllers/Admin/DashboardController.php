<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
   public function index(Request $request)
   {
      $orders = Order::all();

      return view('admin.dashboard', compact('orders'));
   }
}
