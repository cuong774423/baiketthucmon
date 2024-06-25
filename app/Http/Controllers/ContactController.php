<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'your-name' => 'required|string|max:255',
            'your-email' => 'required|email|max:255',
            'your-message' => 'required|string',
        ]);

        Contacts::create([
            'ten' => $validated['your-name'],
            'email' => $validated['your-email'],
            'noi_dung' => $validated['your-message'],
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
