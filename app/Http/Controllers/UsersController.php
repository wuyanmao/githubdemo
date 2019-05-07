<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\User;

class UsersController extends Controller
{
    //
	public function create(){
		return view('users.create');
	}
	public function show(User $user){
		return view('users.show',compact('user'));
	}
	public function store (Request $request){
		$this->verifyField($request->all(),[
			'name' => 'required|string',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|confirmed|min:6'
		]);

	}

}
