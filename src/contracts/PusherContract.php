<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 00:59
 */

namespace sockstack\contracts;


interface PusherContract
{
    /**
     * pusher连接成功
     * @param \Closure $closure
     * @return mixed
     */
    public function connect(\Closure $closure);

    /**
     * 推送数据
     * @param array $data
     * @return mixed
     */
    public function push(array $data);

    /**
     * 关闭连接
     * @param \Closure $closure
     * @return mixed
     */
    public function close(\Closure $closure);
}