<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chat;

class IndexController extends Controller
{


    // 保存 消息到数据库
    public function ajaxSavaMysql(Request $req)
    {
        Chat::create(['sendA' => $req->user,'reciveA'=>$req->receive,'message'=>$req->mes]);
        echo json_encode([
            'code' => 200,
            'mes' => '保存成功'
        ]);
    }

    // 查询聊天记录
    public function ajaxSelecMysql(Request $req)
    {
        if( $req->receive == '所有人' ){
            $data = Chat::where('reciveA',$req->receive)->orderBy('created_at','desc')->offset(0)->limit(10)->get();
        }else{
            $data = Chat::where('sendA',$req->user)->where('reciveA',$req->receive)->orwhere(function($query)use($req){
                $query -> where('sendA',$req->receive)->where('reciveA',$req->user);
            })->orderBy('created_at','desc')->offset(0)->limit(10)->get();
        }
        echo json_encode([
            'code' => 200,
            'data' => $data
        ]);
    }

}
