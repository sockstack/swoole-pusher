<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 01:17
 */

namespace sockstack\queue;


use sockstack\contracts\QueueContract;

class Queue implements QueueContract
{

    /**
     * 添加数据到队列
     * @param string $queue_name
     * @param array $data
     * @return mixed
     */
    public function push(string $queue_name, array $data)
    {
        // TODO: Implement push() method.
    }

    /**
     * 从队列中获取数据
     * @param string $queue_name
     * @return array
     */
    public function pop(string $queue_name): array
    {
        // TODO: Implement pop() method.
    }
}