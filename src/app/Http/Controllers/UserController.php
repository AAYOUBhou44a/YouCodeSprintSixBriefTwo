<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $admin = User::where('role', 'admin')->first(['name', 'email']);
        // sans classe_id, Laravel est incapable de faire le lien avec la table des classes 
        $teachers = User::with('classe')->where('role', 'teacher')->get(['name', 'email', 'classe_id', 'id']);
        $students = User::with('classe')->where('role', 'student')->get(['name', 'email', 'classe_id', 'id']);
        $membersCount = User::count();

        return view('admin.users.index', compact('admin', 'teachers', 'students', 'membersCount'));
    }

    // je peux met id dans les routes et User $id dans le controller et j'aurai le meme résultat
    public function destroy(User $user){ // Laravel trouve l'utilisateur par son ID tout seul
        // $user = User::findOrFail($id);

        $user->delete();

        return back()->with('success', 'Utilisateur supprimé avec succès');
    }

    public function edit(User $user){
        // $user = User::findOrFail($id);

        return view('admin.users.create', compact('user'));
    }

    public function update(RegisterRequest $request, User $user){
        $data = $request->validated();

        $user->update($data);
        return redirect()->route('users.index')->with('success', 'utilisateur mis à jour !');
    }
}
