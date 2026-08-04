<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:5',
        ]);

        // Save to database
        Message::create($data);

        // Send email to admin (direct email)
        Mail::to('john.bradley@clgcontractors.com')->send(new ContactMessageMail($data));

        return back()->with('success', 'Thank you — your message has been received. Member of the team will contact you shortly.');
    }
}
