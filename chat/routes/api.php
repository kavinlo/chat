<?php

use Illuminate\Http\Request;
use App\Models\Chat;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/uname','IndexController@index');

// ajax 保存数据库
Route::get('/saveMysql','IndexController@ajaxSavaMysql');

// ajax 查询聊天记录
Route::get('/selectMysql','IndexController@ajaxSelecMysql');

// ajax 查看消息状态 未读 已读
Route::get('/isLookMysql','IndexController@isLookMysql');

// ajax 设置消息状态 未读
Route::get('/isNotLook','IndexController@isNotLook');
