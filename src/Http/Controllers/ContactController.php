<?php

namespace Bitfumeskkk\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Bitfumeskkk\Contact\Models\Contact;
use Bitfumeskkk\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');
    }

    public function store(Request $request) {
        // dd($request->all());
        dump(Config('contact.send_email_to'));
        dump(Config('main_contact.send_email_to'));
        Contact::create($request->all());
        Mail::to('aaa@ss.com')->send(new ContactMailable($request->message));

        return redirect(route('contact2'));
    }
}
