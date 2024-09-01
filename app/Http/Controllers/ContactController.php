<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form submission (e.g., send an email, save to database, etc.)
        // For now, we'll just return a success message
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
