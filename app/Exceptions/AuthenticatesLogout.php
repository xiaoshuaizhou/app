<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

trait AuthenticatesLogout
{
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->forget($this->guard()->getName());

        $request->session()->regenerate();

        return redirect('/');
    }
}