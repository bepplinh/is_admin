<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showForm() {
        return View::make('login');
    }

    public function login(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $status = Auth::attempt(['username' => $username, 'password' => $password]);
        if ($status) {
            $user = Auth::user();
            $title = $user->is_admin ? 'Admin Dashboard' : 'User Dashboard';
            $heading = $user->is_admin ? 'Welcome, Admin!' : 'Welcome, User!';
            
            if ($user->is_admin) {
                return view('admin.indexAdmin', compact('title', 'heading'));
            }
            return view('client.home', compact('title', 'heading'));
        }
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
