<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 01:14
 */

namespace sockstack\config;


class Config
{
    /**
     * 进程数
     * @var int
     */
    protected $worker_num = 8;

    protected $host = "0.0.0.0";

    protected $port = 9501;

    protected $queue_prefix = "pusher:queue:";

    protected $daemon = fale;
}