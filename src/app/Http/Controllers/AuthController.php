<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function submitLogin(LoginRequest $request){
        $credentials = $request->only('email', 'password'); 
        if(Auth::attempt($credentials)){
            // Auth::attempt : Vérifie l'identité et connecte.
            //'re' regenerate() : Sécurise la connexion en changeant l'ID de session.
            $request->session()->regenerate();

            $user = Auth::user();

            switch($user->role){
                case 'admin':
                    return redirect()->route('admin.users.create');
                case 'teacher':
                    return redirect()->route('teacher.briefs.create');
                case 'student':
                    return redirect()->route('student.briefs.index');
                default :
                    return redirect()->route('student.briefs.index');
            }
            
        }
        return back();
    }

    public function store(RegisterRequest $request){
        $created = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
        'age' => $request->age,
        'phone' => $request->phone,
        'classe_id' => null
        ]);

        return back();
    }
}
