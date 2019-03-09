<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 00:59
 */

namespace sockstack;


use sockstack\contracts\PusherContract;

class Pusher implements PusherContract
{

    /**
     * pusher连接成功
     * @param \Closure $closure
     * @return mixed
     */
    public function connect(\Closure $closure)
    {
        // TODO: Implement connect() method.
    }

    /**
     * 推送数据
     * @param array $data
     * @return mixed
     */
    public function push(array $data)
    {
        // TODO: Implement push() method.
    }

    /**
     * 关闭连接
     * @param \Closure $closure
     * @return mixed
     */
    public function close(\Closure $closure)
    {
        // TODO: Implement close() method.
    }
}