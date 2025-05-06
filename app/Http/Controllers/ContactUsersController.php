<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsersController extends Controller
{
    /**
     * Store a new contact message in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
        'location' => 'nullable|string',
    ]);

    Contact::create($validated);

    return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
}

}
