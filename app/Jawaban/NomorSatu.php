<?php

namespace App\Jawaban;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NomorSatu {

	public function auth (Request $request) {

		// Tuliskan code untuk proses login dengan menggunakan email/username dan password
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $login_type = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [
            $login_type => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('event.home')->with('message', ['Login berhasil', 'success']);
        } else {
            return redirect()->back()->with('message', ['Username/Email atau password salah', 'danger']);
        }
	}

	public function logout () {

		// Tuliskan code untuk menangani proses logout
        Auth::logout();
        return redirect()->route('event.home');
	}
}

?>
