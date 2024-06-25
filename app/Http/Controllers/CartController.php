<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.cart', compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);

        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }
    
    public function delCartItem($id){
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else Session::forget('cart');
        return redirect()->back();
    }


    // Hàm giảm số lượng sản phẩm trong giỏ hàng
    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('cart.index');
    }

    public function showCart()
    {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $productCarts = $cart ? $cart->items : [];
        $totalPrice = $cart ? $cart->totalPrice : 0;

        return view('cart.index', compact('productCarts', 'totalPrice'));
    }

    // Hàm cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateCart(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $quantities = $request->input('quantities');

        foreach ($quantities as $id => $qty) {
            if ($qty > 0) {
                $product = Product::find($id);
                $cart->items[$id]['qty'] = $qty;
                $cart->items[$id]['price'] = ($product->promotion_price == 0 ? $product->unit_price : $product->promotion_price) * $qty;
            } else {
                unset($cart->items[$id]);
            }
        }

        // Tính lại tổng số lượng và tổng giá
        $cart->totalQty = 0;
        $cart->totalPrice = 0;

        foreach ($cart->items as $item) {
            $cart->totalQty += $item['qty'];
            $cart->totalPrice += $item['price'];
        }

        Session::put('cart', $cart);

        return redirect()->route('cart.index');
    }
}

