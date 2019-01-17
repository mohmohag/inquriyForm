<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
use Request;
use Validator;
use Auth;

// --
use App\User;

class UserController extends Controller {

	function index() {
		if(Auth::check())
			return redirect("admin/inquiry/list");

		return view("user/login");
	}

	function login() {
		$input = Request::all();
		if(Auth::attempt(['email' => $input['email'],
			'password' => $input['password']	])
		) {
			return redirect('admin/inquiry/list');
		} else {
			return redirect('user/login')->withErrors(array('Login failed! Try again.'));
		}
	}

	function logout() {
		Auth::logout();
		return redirect('user/login');
	}



}
