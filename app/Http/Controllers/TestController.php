<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//引入DB门面
use DB;
//引入模型
use app\Model\a;
class TestController extends Controller
{
    //
	public function add(){
		//定义关联
		  $db = DB::table('member');
//		  $result = $db -> insert(
//		  	[
//		  		'name' => 'wsd',
//				'age' => 120,
//				'email' => 'madadsasdong@qq.com',
//			 ]
//		    );
//		  dd($result);

		$db ->insertGetId([
			'name' =>'safsf',
			'age' =>'18',
			'email' =>'asdas@asd',
		]);
	}
	public function del(){
			$db = DB::table('member');
			$result = $db->where('id','<','3')->delete();
			dd($result);
	}


	public function update(){
		$db = DB::table('member');
		$rst = $db -> where('id','<','4') -> update([
			'name' => 'asd',
		]);
		dd($rst);
	}


	public function  select(){
		$db = DB::table('member');
		$data = $db ->get();//访问的是对象  数组的话$arr['值'];
//		foreach ($data as $key => $value){
//			echo "id是:{$value -> id},名字是:{$value -> name},邮箱:{$value -> email}<br>";
//		}
		/*案列2 获取id>3的数据  where()->get();
		 * ->where()->where()->where()这个语法是并且
		 * ->where()->orwhere()->orwhere()这个语法是或者
		 */
      //echo '<hr>';
		//$daya = $db ->where('id','>','3')->where('age','>','119')->get();这个是并且语法
		//$or = $db->where('id','>','2')->orwhere('age','>','119')->get();这个是或者语法
		//dd($daya);
		//dd($or);
		//$data = $db->first();//这个是查找第一个字段
		//$data =$db->where('id','1')->value('email');//这个是查询指定值
		//$data =$db->select('name','email')->get();//指定的一些字段的值用select
		//dd($data);
	  //echo '<hr>';
	  //$data = $db->orderBy('id','desc') ->get();//降序按照指定的规则的排序
	  //dd($data);
//		$data =$db->limit(5)->offset(1)->get();
//		dd($data);
		$day = date('N');
		return view('home/test/test3',compact('data','day'));
	}


	public function test3(){
		//展示试图的方法 return view('文件的名称')
		$data = date('Y-m-d H:i:s',time());
		//$day = date('N');
		$time = strtotime('+1 year');
		//dd(compact('data','day'));//compact打包函数 变量名
		//return view('home/test/test3',['date' =>$data,'day' =>$day,'time' => $time]);//也可以支持点写法('home.test.test3');
		dd($day);
	}

}
