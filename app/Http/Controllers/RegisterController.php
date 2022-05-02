<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function index() 
	{
		return view('pages.auth', [
			'action' => 'register'
		]);
	}

	public function register(Request $request)
	{
		$request->validate([
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:6'
		]);

		User::create([
			'username' => $request->username,
			'email' => $request->email,
			'password' => Hash::make($request->password)
		]);

		return redirect()->route('login');
	}
}
