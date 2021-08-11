<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }

    public function contact(){
        $contacts = Contact::all();
        return view('backend.contact.index', [
            'contacts' => $contacts
        ]);

        
    }
    
}
