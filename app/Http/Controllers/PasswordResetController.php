<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PasswordResetController extends Controller
{
    //
    public function send_reset_password_email(Request $request)

    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        // check users email exists or not

        $user = User::where('email', $email)->first();
        if (!$user) {
            return response([
                'message' => 'Email Does not exists',
                'status' => 'failed',
            ], 404);
        }

        // generate token
        $token = Str::random(60);

        // saveing data to password reset table
        PasswordReset::create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        // dump("http://127.0.0.1:8000/api/reset/", $token);

        // sending email and password reset view
        Mail::send('reset', ['token' => $token], function (Message $message) use ($email) {
            $message->subject('Reset your password');
            $message->to($email);
        });

        return response([
            'message' => 'Password reset email sent...check your email',
            'status' => 'success',
        ], 200);
    }
}
