<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $admin = User::where('role', 'admin')->first(['name', 'email']);
        // sans classe_id, Laravel est incapable de faire le lien avec la table des classes 
        $teachers = User::with('classe')->where('role', 'teacher')->get(['name', 'email', 'classe_id']);
        $students = User::with('classe')->where('role', 'student')->get(['name', 'email', 'classe_id']);
        $membersCount = User::count();

        return view('admin.users.index', compact('admin', 'teachers', 'students', 'membersCount'));
    }
}
