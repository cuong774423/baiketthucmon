<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Mail;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function reply(Request $request, $id)
    {
        $contact = Contacts::findOrFail($id);

        $request->validate([
            'reply_message' => 'required|string',
        ]);

        // Gửi email phản hồi cho khách hàng
        Mail::raw($request->input('reply_message'), function ($message) use ($contact) {
            $message->to($contact->email)
                    ->subject('Reply to your contact');
        });

        // Cập nhật trạng thái liên hệ
        $contact->contacted = true;
        $contact->save();

        return redirect()->route('contacts.index')->with('success', 'Reply sent and status updated.');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect back to the list of categories
        return redirect()->route('contact.index')->with('success', 'contact deleted successfully.');
    }
}
