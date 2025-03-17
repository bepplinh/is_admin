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
            $url = '/';
            if($user->is_admin) {
                $url = '/admin';
            }
            return Redirect::to($url)->with('user', $user);
        }
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
