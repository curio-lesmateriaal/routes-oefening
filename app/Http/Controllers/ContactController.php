<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request) {
        // Formulier wordt niet echt verwerkt.

        Session::flash('message', 'Your contact request has been sent.');

        return redirect('/contact');
    }
}
