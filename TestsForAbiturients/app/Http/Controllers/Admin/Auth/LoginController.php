<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web-admin');
    }
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password'  => 'required|min:6'
        ]);

        if (Auth::guard('web-admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.index'));
        }

        return redirect()->back()->withInput($request->only(['email', 'remember']));
    }
}
