<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Parts;

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


    public function create(Parts $part)
    {
        //
        $part = Parts::orderby('id', 'desc')->paginate(10);

        return view('dashboard.orders.create')->withPart($part);
    }


    public function store()
    {

        Orders::create(request()->validate([
            'orderNumber' => 'required',
            'drawingNumber' => 'required'
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
