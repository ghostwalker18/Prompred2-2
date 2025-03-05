<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{	
    /**
     * Handle an authentication attempt.
     */
    public function authenticateAdmin(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
          
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->to('/admin');
        }
        else {
            return redirect()->to('/login');
        };

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }
    
    public function logoutAdmin()
    {
    	Auth::logout();
    	return redirect()->to('/');
    }
}
