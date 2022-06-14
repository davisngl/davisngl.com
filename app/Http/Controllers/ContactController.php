<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Inertia\Response as InertiaResponse;

class ContactController extends Controller
{
    public function index(): InertiaResponse
    {
        return inertia('Contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        if ($request->filled('full_name')) {
            // TODO Extract as a honeypot component
            abort(404, 'Sorry, couldn\'t send the message!');
        }

        session()->flash('success', 'Your message has been sent!');

        return back();
    }
}
