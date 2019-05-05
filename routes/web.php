<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','StaicPagesController@home');
Route::get('/help','StaicPagesController@help');
Route::get('/about','StaicPagesController@about');




//Route::get('/', function () {
//    return view('welcome');
//
//});
//Route::get('/user',function(){
//    return view('welcome');
//});
//Route::any('/home',function(){
//    //any语法;
//    echo 'sajidjsaijdsa';
//});
//Route::match(['get','post'],'/test1',function() {
//    echo '当前的位置/test1';
//    });
//
////可选参数
//Route::any('test2/{id}',function($id = null){
//    echo "当前的用户id是"  . $id;
//});
//
////通过?传参 要在浏览器当中写入id=参数值
//Route::any('/user1',function(){
//    echo "当前的用户名" . $_GET['id'];
//});
//
////路由别名
//Route::any('/wusadaaaaaaaaaaaaaaaaaadadwadf/awfawfjhaudhuiwahauf',function(){
//    echo 'sdsad';
//}) -> name('wus');
//
////控制器路由
//Route::any('/wuwuwu','Admin\IndexController@index');
//Route::any('/wuwuwu1','Home\IndexController@index');
//
//
//
//Route::group(['prefix' =>'home/test'],function(){
//	Route::any('add','TestController@add');
//	Route::any('del','TestController@del');
//	Route::any('update','TestController@update');
//	Route::any('select','TestController@select');
//	Route::any('test2','Testcontroller@test3');//第一个是路径  控制器@方法
//
//});
//Route::any('getQuestion','QuestionControllers@getQuestion');
//Route::any('home/test/test8','QuestionControllers@test8');
//Route::any('home/test/test9','QuestionControllers@test9');
//Route::any('home/test/test11','QuestionControllers@test11');
//
//Route::any('home/wu','QuestionControllers@wu');
////pagein页面
//Route::any('home/test/page','QuestionControllers@pagein');
////关于session
//Route::get('home/test/ses','QuestionControllers@ses');
////关于cache
//Route::get('home/test/cac','QuestionControllers@cac');
//
//Route::get('test1/1','QuestionControllers@ceshi');










