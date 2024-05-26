<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\KaryawanAsli;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'id' => 'required|integer',
        ]);

        $karyawan = KaryawanAsli::where('nama', $request->nama)->first();

        if ($karyawan && $karyawan->id == $request->id) {
            Auth::loginUsingId($karyawan->id);
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors(['nama' => 'Nama atau ID salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
