<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $contacts = Contact::all();

        return view('admin.contact.list', compact('contacts'));
    }

    public function cancelApprove($id, Request $request)
    {
        try {
            $contact = Contact::find($id);
            $contact->status = Contact::CANCEL;
            $contact->save();

            Toastr::success("Cập nhật thành công!");
        } catch(\Exception $e) {
            Toastr::error('Thất bại!'. $e->getMessage());
        }

        return redirect()->route('contact');
    }

    public function approve($id, Request $request)
    {
        try {
            $contact = Contact::find($id);
            $contact->status = Contact::APPROVED;
            $contact->save();

            Toastr::success("Cập nhật thành công!");
        } catch(\Exception $e) {
            Toastr::error('Thất bại!'. $e->getMessage());
        }

        return redirect()->route('contact');
    }
}
