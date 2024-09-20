<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $verified = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'register');
        if ($verified > 0.7) {
            User::create([
                "email" => $request->email,
                'name' => $request->name,
                "password" => Hash::make($request->password),
            ]);
            return response()->json(['success' => true, 'message' => "User register successfully! Please Login to continue"]);
        } else {
            return response()->json(['success' => false, 'message' => "Recaptcha Failed!"]);
        }
    }

    public function login(LoginRequest $request)
    {
        $verified = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'login');
        if ($verified) {
            if (Auth::attempt($request->except(['g-recaptcha-response', '_token']))) {
                return response()->json(['success' => true, 'code' => 200, 'message' => "User login successfully!"]);
            } else {
                return response()->json(['success' => true, 'code' => 404, 'message' => "Wrong Email or Password"]);
            }
        } else {
            return response()->json(['success' => false, 'code' => 500, 'message' => "Recaptcha Failed!"]);
        }
    }

    public function logout()
    {
        if(auth()->check()){
            Auth::logout();
            return to_route('login');
        }
    }
}
