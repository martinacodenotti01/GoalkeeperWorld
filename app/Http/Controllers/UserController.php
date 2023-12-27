<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function verification_notice(){
        return view('auth.verify-email');
    }

    public function verification_verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect(route('profile'));
    }

    public function verification_send(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return redirect(route('homepage'))->with('message', 'Link di verifica inviato!');
    }
}
