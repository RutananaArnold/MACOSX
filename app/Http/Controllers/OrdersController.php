<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::all()->sortByDesc('updated_at');
        return view('orders.index', ['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
        //
        if(Auth::check()) {
            $orders = Order::all();
            $ordersCount = count($orders);
            $userId = Auth::user()->id;

            $order = new Order();

            $order->order_id = "#5377$ordersCount";
            $order->status = $request -> input('status');
            $order->note = $request -> input('note');
            $order->name = $request -> input('name');
            $order->email = $request -> input('email');
            $order->phone = $request -> input('phone');
            $order->street = $request -> input('street');
            $order->town = $request -> input('town');
            $order->district = $request -> input('district');
            $order->delivery = $request -> input('delivery');
            $order->pay_method = $request -> input('pay_method');
            $order->transactionRef = $request -> input('transactionRef');
            $order->user_id = Auth::user()->id;

            $order->qty = \Cart::session($userId)->getTotalQuantity();
            $order->price = $request -> input('price');
            $order->total = \Cart::session($userId)->getTotal();

            $order->save();

                if($order){
                    //save ordered items
                    $cartItems = \Cart::session($userId)->getContent();
                    foreach ($cartItems as $item) {
                        $order->products()->attach($item->id, ['price'=>$item->price, 'qty'=>$item->quantity]);
                    }
                    //clear cart upon ordering
                    \Cart::session($userId)->clear();

                    //then finish and return order details
                    return redirect()->route('orders.show', ['order' => $order -> id])
                    -> with('success', 'Your order has been well placed! Thank you!');
                }

        }
        return back()->withInput()->with('errors', 'Sorry! Your order couldn\'t be placed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        $order = Order::find($order->id);
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get();
        return view('orders.show', ['order'=>$order], ['orders'=>$orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        $order = Order::find($order->id);
        return view('orders.edit', ['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        //save updated data
        $orderUpdate = Order::where('id', $order->id)
            ->update([
                'order_id' => $request -> input('order_id'),
                'price' => $request -> input('price'),
                'total' => $request -> input('total'),
                'name' => $request -> input('name'),
                'email' => $request -> input('email'),
                'phone' => $request -> input('phone'),
                'street' => $request -> input('street'),
                'town' => $request -> input('town'),
                'district' => $request -> input('district'),
                'status' => $request -> input('status'),
                'delivery' => $request -> input('delivery'),
                'pay_method' => $request -> input('pay_method'),
                'user_id' => Auth::user()->id,
            ]);
        if($orderUpdate) {
            if (Auth::user()->role_id == 0) {
                return redirect()->route('orders.index', ['order' => $order -> id])
                -> with('success', 'Great! It\'s done, thanks for delivering.');
            } else {
                return redirect()->route('orders.show', ['order' => $order -> id])
                -> with('success', 'Your order has been well placed! Thank you!');
            }
        }

        //redirect if update fails
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
