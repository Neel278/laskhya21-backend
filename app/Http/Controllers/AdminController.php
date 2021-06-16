<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(Request $request)
    {
        $res = app('App\Http\Controllers\UserController')->login($request);
        if ($res->status() == 200) {
            return redirect()->route('admin.dashboard');
        };
        return redirect()->route('admin.login');
    }

    function show()
    {
        return view('admin.dashboard');
    }

    function messages()
    {
        $messages = app('App\Http\Controllers\ContactController')->show();

        return view('admin.messages', ['messages' => $messages]);
    }

    function logout(Request $request)
    {
        $res = app('App\Http\Controllers\UserController')->logout($request);
        if ($res->status() == 200) {
            return redirect()->route('admin.login');
        };
        return redirect()->route('admin.dashboard');
    }
    function showOneMessage($message_id)
    {
        $message = Contact::find($message_id);
        return view('admin.message', ['message' => $message]);
    }
}
