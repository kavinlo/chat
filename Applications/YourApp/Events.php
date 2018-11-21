<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * 用于检测业务代码死循环或者长时间阻塞等问题
 * 如果发现业务卡死，可以将下面declare打开（去掉//注释），并执行php start.php reload
 * 然后观察一段时间workerman.log看是否有process_timeout异常
 */
//declare(ticks=1);

use \GatewayWorker\Lib\Gateway;

/**
 * 主逻辑
 * 主要是处理 onConnect onMessage onClose 三个方法
 * onConnect 和 onClose 如果不需要可以不用实现并删除
 */
class Events
{
    /**
     * 当客户端连接时触发
     * 如果业务不需此回调可以删除onConnect
     * 
     * @param int $client_id 连接id
     */
    protected static $userList = ['user'];
    protected static $list = ['user'];

    public static function onConnect($client_id)
    {
        // 向当前client_id发送数据 
        // Gateway::sendToClient($client_id, "Hello $client_id\r\n");
        // 向所有人发送
        // Gateway::sendToAll("$client_id \r\n");
    }
    
   /**
    * 当客户端发来消息时触发
    * @param int $client_id 连接id
    * @param mixed $message 具体消息
    */
   public static function onMessage($client_id, $message)
   {
        $user = explode(":",$message);
        // 判断是不是客户登录信息
        if( $user[0] == 'user' ){
            // 判断是否重复登录
            if( !in_array( $user[1],self::$list ) ){
                self::$list[] = $user[1];
                // 向所有人发送 用户列表
                self::$userList[] = $client_id.":".$user[1];
            }else{
                foreach( self::$list as $k=>$v ){

                    // 切除刷新下线用户 恢复原有登录状态
                    if( $v == $user[1] ){
                        array_splice( self::$list,$k,1);
                        self::$list[] = $user[1];
                        array_splice( self::$userList,$k,1);
                        self::$userList[] = $client_id.":".$user[1];
                    }

                }
            }
            Gateway::sendToAll(json_encode(self::$userList));
        }else{
            $message = [];
            $message[] = $user[0].":".$user[1].":".$user[2].":".$user[3];
            // 判断是否 给所有人发送信息
            if($user[0] == 'all'){
                GateWay::sendToAll(json_encode($message));
            }else{
                Gateway::sendToClient($user[0],json_encode($message));
            }
        }
   }
   
   /**
    * 当用户断开连接时触发
    * @param int $client_id 连接id
    */
   public static function onClose($client_id)
   {
       // 向所有人发送 删除用户列表
       foreach(self::$userList as $k=>$v){
            $bridge = explode(":",$v);
            if( $bridge[0] == $client_id ){
                array_splice( self::$userList,$k,1);
                array_splice( self::$list,$k,1);
            }
       }
       // 向所有人发送 删除用户列表
       Gateway::sendToAll(json_encode(self::$userList));
   }
}
