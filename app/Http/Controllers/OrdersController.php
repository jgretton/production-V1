<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $orders = Orders::orderby('id', 'desc')->paginate(5);
        return view('dashboard.orders.index')->withOrders($orders);
    }


    public function create()
    {
        //
        return view('dashboard.orders.create');
    }


    public function store()
    {

        Orders::create(request()->validate([
            'partNumber' => 'required',
            'orderNumber' => 'required',
            'material' => 'required',
            'programNumber' => 'required',
            'cycleTime' => 'required'
            ]));

        return redirect('dashboard/orders');

    }


    public function show(Orders $orders)
    {
        //
        return view('dashboard.orders', compact('order'));        
    }


    public function edit(Orders $order)
    {
        //
        return view('dashboard.orders.edit', compact('order'));
    }


    public function update(Orders $order)
    {
        //
        $order -> update(request()->validate([
            'partNumber' => 'required',
            'orderNumber' => 'required',
            'material' => 'required',
            'programNumber' => 'required',
            'cycleTime' => 'required'
            ]));

        return redirect('dashboard/orders');
    }


    public function destroy(Orders $order)
    {
        //
        $order -> delete();

        return redirect('dashboard/orders');
    }
}
