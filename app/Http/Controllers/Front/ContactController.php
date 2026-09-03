<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('Front.contact');
    }

    public function send(Request $request): RedirectResponse
    {
        $enquiry = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(config('mail.to.address'))->send(new ContactEnquiry($enquiry));

        return redirect()
            ->route('front.contact')
            ->with('success', 'Thank you. Your enquiry has been sent successfully.');
    }
}
