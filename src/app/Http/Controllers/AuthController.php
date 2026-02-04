<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function submitLogin(LoginRequest $request){
        $credentials = $request->only('email', 'password'); 
        if(Auth::attempt($credentials)){
            // Auth::attempt : Vérifie l'identité et connecte.
            // regenerate() : Sécurise la connexion en changeant l'ID de session.
            $request->session()->regenerate();

            $user = Auth::user();

            switch($user->role){
                case 'admin':
                    return redirect()->route('create-user');
                case 'teacher':
                    return redirect()->route('create-brief');
                case 'student':
                    return redirect()->route('student-briefs');
                default :
                    return redirect()->route('student-briefs');
            }
            
        }
        return back();
    }
}
