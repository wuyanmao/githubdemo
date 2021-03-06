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
		$this->validate($request,[
			'name' => 'required|string',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|confirmed|min:6'
		]);
		return;

		session()->flash('success','欢迎,你将在这探索知识的海洋');
		return redirect()->route('users.show', [$user]);//user模型对象的实列自动获取主键
	}

}
