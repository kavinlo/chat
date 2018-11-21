<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chat;

class IndexController extends Controller
{
    // 保存用户 如果不存在注册
    public function index(Request $req)
    {
        $data = Chat::where('uname',$req->uname);
        echo json_encode($data);
    }

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

    // 消息状态  0 -> 未读 1 -> 已读
    public function isLookMysql(Request $req)
    {
        $status = Chat::where('sendA',$req->list)->where('reciveA',$req->user)->where('isRead','0')->count();
        echo json_encode([
            'code' => 200,
            'status' => $status
        ]);
    }

    // 设置 消息状态 未读
    public function isNotLook(Request $req)
    {
        Chat::where('sendA',$req->send)->where('reciveA',$req->receive)->update(['status'=>'0']);
        echo json_encode([
            'code' => 200,
            'mes' => '设置成功'
        ]);
    }

}
