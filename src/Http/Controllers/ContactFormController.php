<?php

namespace Tarsoft\Contax\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tarsoft\Contax\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contactform::contact');
    }

    public function store(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('form'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }
}
