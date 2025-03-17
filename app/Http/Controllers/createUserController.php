<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class createUserController extends Controller
{
    public function showCreateUser() {
        return view('createUser');
    }
    public function createUser(Request $request) {
        $request->validate([

            'username' => ['required','string','max:255','unique:users'],
            'password' => ['required','string','min:3','confirmed'],
            'is_admin' => ['required','boolean','integer'],
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;
        $user->save();

        return redirect()->back()->with('success', 'Product created successfully!');
    }
}
