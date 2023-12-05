<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(): View {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse {
        $details = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'projectType' => 'required',
            'budget' => 'required',
            'phone' => ['required', 'numeric'],
            'country' => 'required',
            'details' => 'required',
        ]);

        Mail::to(env('MAIL_TO'))->send(new Enquiry($details));

        return \redirect('/')->with('status', 'Thank you! Your message just landed in our inbox. Talk to you soon. Happy Browsing!');
    }
}
