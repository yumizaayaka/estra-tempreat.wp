<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('/index');
    }
    public function post(Request $request)
    {
        $contact = new Contact;
        $form = $request->all();
        unset($form['_token']);
        $contact->fill($form)->save();
        return redirect('/thanks');
    }
}
