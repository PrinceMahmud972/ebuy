<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('show', ['product' => $product]);
    }

    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect()->back();
        }

        return redirect('/login');
    }

    public function cartList()
    {
        $userId = session()->get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cartList', ['products' => $products]);
    }

    public function cartId($id)
    {
        Cart::destroy($id);
        return redirect()->back();
    }


    public static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }


    public function order()
    {
        $userId = session()->get('user')['id'];
        $productSum = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('checkout', ['productSum' => $productSum]);
    }


    public function orderPlace(Request $request)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->address = $request->address;
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->save();

            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }

    public function myOrders()
    {
        $userId = session()->get('user')['id'];
        $myProducts = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();
        return view('myorders', ['products' => $myProducts]);
    }
}
