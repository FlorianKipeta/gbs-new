<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function submit(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Mail::to('info@gbstrusted.co.tz')->send(new ContactMessage($validated));

        return back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
    }
}
