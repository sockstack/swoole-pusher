<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 01:18
 */

namespace sockstack\server;


use sockstack\contracts\ServerContract;
use sockstack\contracts\swoole_http_request;
use sockstack\contracts\swoole_websocket_frame;
use sockstack\contracts\swoole_websocket_server;

class WebSocketServer implements ServerContract
{

    /**
     * 服务连接
     * @return mixed
     */
    public function onOpen(swoole_websocket_server $svr, swoole_http_request $req)
    {
        // TODO: Implement onOpen() method.
    }

    /**
     * 接收到数据
     * @param swoole_websocket_server $server
     * @param swoole_websocket_frame $frame
     * @return mixed
     */
    public function onMessage(swoole_websocket_server $server, swoole_websocket_frame $frame)
    {
        // TODO: Implement onMessage() method.
    }

    /**
     * 服务关闭
     * @param swoole_websocket_server $server
     * @param int $fd
     * @param int $reactorId
     * @return mixed
     */
    public function onClose(swoole_websocket_server $server, int $fd, int $reactorId)
    {
        // TODO: Implement onClose() method.
    }
}