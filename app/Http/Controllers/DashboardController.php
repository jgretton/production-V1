<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class DashboardController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $orders = Orders::paginate(5);
        return view('dashboard.index')->withOrders($orders);
    }
    public function products(){
        return view('dashboard.products');
    }
}
