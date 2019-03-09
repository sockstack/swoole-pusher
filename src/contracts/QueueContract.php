<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 01:14
 */

namespace sockstack\contracts;


interface QueueContract
{
    /**
     * 添加数据到队列
     * @param string $queue_name
     * @param array $data
     * @return mixed
     */
    public function push(string $queue_name, array $data);

    /**
     * 从队列中获取数据
     * @param string $queue_name
     * @return array
     */
    public function pop(string $queue_name) : array;
}