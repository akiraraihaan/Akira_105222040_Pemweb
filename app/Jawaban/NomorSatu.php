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


        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('event.home');
        }
        
		return redirect()->route('event.home');
	}

	public function logout (Request $request) {

		// Tuliskan code untuk menangani proses logout

        return redirect()->route('event.home');
	}
}

?>
