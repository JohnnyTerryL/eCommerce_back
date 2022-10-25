<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResource::collection(Order::all()); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return (new OrderResource(Order::create($request->all())))->additional(["message"=>"Orden creado con éxito."]); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return new OrderResource($order);  //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return (new OrderResource($order))->additional(["message"=>"Orden actualizado con éxito."]); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return (new OrderResource($order))->additional(["message"=>"Orden eliminado con éxito."]);
     //
    }
    public function listOnStockProducts(){
        $orders = Order::where("stock", ">", 0)->get();
        return OrderResource::collection($orders);
    }

    public function productByCategory($category_id){
        $orders = Order::where("category_id" , $category_id)->get();
        return OrderResource::collection($orders);
    }
}
