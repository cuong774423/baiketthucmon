<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;

class OrderDetailController extends Controller
{
    public function orderDetail($id)
    {
        $bill = Bill::find($id);
        if (!$bill) {
            return redirect()->route('home')->with('error', 'Đơn hàng không tồn tại.');
        }
        $products = $bill->products;
        return view('pages.orderdetail', compact('bill', 'products'));
    }
}
