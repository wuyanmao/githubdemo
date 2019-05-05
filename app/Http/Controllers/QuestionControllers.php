<?php

namespace App\Http\Controllers;

use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input as Input;
use App\Model\a;
use Session;



class QuestionControllers extends Controller
{
    //request实列 传形参
	public function test8(Request $request){
	    $modle = new a();
//		$modle ->name = 'asdsds';
//		$modle ->age = 11;
//		$modle ->email = 'asdassadqq.com';
//		dd($modle ->save());
		/*这是第一种方法*/
		$request = $modle -> create($request -> all());
		dd($request);


	}
	public function test9(){
		//$data = a::find(4) -> toArray();//调用静态方法
		//$data = a::where('id','>',4) -> first() ->toArray();//
		$data = a::all();//在all方法之前 写一些辅助方法实现连贯操作
		//修改
		$data = a::find(7);
		return response()->json(['msg'=>'商品分类','code'=>200,'data'=>['id'=>1,'cat_name'=>'phone']]);
		dd($data);
		$data -> email = 'asdhaisqqqqqq@saoj1218808495';
		$result = $data -> save();
		//dd($result);
		//dd($data);
	}
	public function test11(Request $request){

		if(Input::method() == 'POST'){
			$this -> validate($request,[
				//规则
				'name' =>'required|min:2|max:20',
				'age' => 'min:1|required|',
				'email' => 'required|email',
				'captcha' => 'required|captcha'
			]);
		}else{
			return view('home/test/test11');
		}

	}
	//文件上传操作
	public  function  wu(Request $request){
		if(Input::method() == 'POST'){
			  //dd($_FILES);
			if($request -> hasFile('avata') && $request -> file('avata') -> isValid()){
				$request ->file('avata') -> getClientOriginalName();
				$request -> file('avata') -> getClientSize();
				$request -> file('avata') -> move('./uploads',md5(time() . rand(100000,900000)) . $request ->file('avata') -> getClientOriginalName());
				$data = $request -> all();
//				$result = a::create($data);
//				dd($result);
			}
		}else{
			return view('home/test/wu');
		}
	}
	//分页
	public  function pagein(){
		$data = a::paginate(2);

		return view('home.test.pagein',compact('data'));
	}

	public function ses(){
		//存储一个session
		Session::put('name','杀杀杀');
		//dd( Session::all());
		dd(Session::has('name'));
	}
	public  function cac(){
		//存储cache
		Cache::put('class','qz04',10);
		Cache::put('name','qz04',10);
		Cache::put('name','qz05',10);
		//Cache::add('class','50',10);

	}

	public function ceshi(){

	}

}
