<?php

namespace App\Http\Controllers;

use App\Mail\NewUserNotification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required"
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $user = User::create([
                "name" => $req->input('name'),
                "email" => $req->input('email'),
                "password" => Hash::make($req->input('password')),
                "verifyHash" => Str::random(40)
            ]);
            Mail::to($user->email)->send(new NewUserNotification($user));
            return $this->login($req);
            // return $user;
        }
    }
    function verifyMail($user_email, $mail_hash)
    {
        $user = User::where('email', $user_email)->first();
        if (($user->verifyHash == $mail_hash) && ($user->verified != true)) {
            DB::table('users')
                ->where('id', $user->id)
                ->update(['verified' => 1, 'email_verified_at' => Carbon::now()]);
            return response(['message' => "You have verified successfully!"], 200);
        } else {
            return response(['message' => "Unable To verify! or Already Verified!"], 401);
        }
    }
    function login(Request $req)
    {
        if (!Auth::attempt($req->only('email', 'password'))) {
            return response([
                'message' => "Invalid Credentials",
                "status" => false,
            ], Response::HTTP_UNAUTHORIZED);
        }
        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60);

        return response([
            'message' => $token,
        ], 200)->withCookie($cookie);
    }
    function user()
    {
        return Auth::user();
    }
    function admin()
    {
        return response('Welcome Boss!', 200);
    }
    function loginGet()
    {
        return response(["message" => 'Unauthenticated'], 401);
    }
    function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => "Success"
        ], 200)->withCookie($cookie);
    }
}
