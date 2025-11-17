<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth/login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(route('index') );
    }

    public function destroy(string $id)
    {
        //
    }
}
