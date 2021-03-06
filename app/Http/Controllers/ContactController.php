<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
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
            return response()->json(['message' => $validator->errors()->all(), 'type' => 'error']);
        } else {
            // if validation succeeds we need to save the data and return the response
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->created_at = Carbon::now();
            $contact->updated_at = Carbon::now();
            $res = $contact->save();

            // check if message was successfully saved or not
            if ($res) {
                return response()->json(['message' => ["Your messages is saved"], 'type' => 'success'], 200);
            } else {
                return response()->json(['message' => ["something went wrong"], 'type' => 'error'], 500);
            }
        }
    }

    function show()
    {
        return Contact::orderBy('created_at', 'desc')
            ->limit(50)->get();
    }
}
