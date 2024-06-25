<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    // BillController.php
public function index()
{
    $bills = Bill::all();
    return view('bills.index', compact('bills'));
}


    public function edit($id)
    {
        $bill = Bill::findOrFail($id);
        return view('bills.edit', compact('bill'));
    }

    public function update(Request $request, $id)
    {
        $bill = Bill::findOrFail($id);
        $bill->status = $request->input('status');
        $bill->save();

        return redirect()->route('bills.index')->with('success', 'Trạng thái đơn hàng đã được cập nhật.');
    }
}
