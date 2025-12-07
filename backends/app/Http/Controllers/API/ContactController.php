<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function store(Request $request){
        $validated = $request->validate([
            'mail'=> 'required|email',
            'phone' => 'required|string',
            'message'=> 'required|string',
        ]);

        // enregistrement
        $contact = Contact::create($validated);

        return response()->json([
            'success'=>true,
            'data'=>$contact
        ]);
    }

}
