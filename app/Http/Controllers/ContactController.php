<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // Accepting feedback message in contact form(of frontend) inhere
    function index(Request $request)
    {
        // take incoming data and validate the data first
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email",
            "message" => "required|max:255"
        ]);
        if ($validator->fails()) {
            // if validation fails return the error
            return $validator->errors();
        } else {
            // if validation succeeds we need to save the data and return the response
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $res = $contact->save();

            // check if message was successfully saved or not
            if ($res) {
                return response()->json(['message' => "Your messages is saved"], 200);
            } else {
                return response()->json(['message' => "something went wrong"], 500);
            }
        }
    }

    function show()
    {
        return Contact::all();
    }
}
