<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function submitContactUsForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        try {
            $contactUs = new ContactUs();
            $contactUs->name = $validatedData['name'];
            $contactUs->email = $validatedData['email'];
            $contactUs->subject = $validatedData['subject'];
            $contactUs->message = $validatedData['message'];
            $contactUs->save();

            return response()->json(['success' => true, 'message' => 'Your message has been sent.']);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Something went wrong']);
        }
    }
}
