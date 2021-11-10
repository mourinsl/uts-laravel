<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showLogin(){
		return view('Admin/login');
	}

	function LoginProcess(){
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('Admin/beranda')-> with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal. Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('Admin/beranda');
	}

}