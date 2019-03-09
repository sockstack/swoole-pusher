<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 01:06
 */

namespace sockstack\contracts;


interface ServerContract
{
    /**
     * 服务连接
     * @return mixed
     */
    public function onOpen(swoole_websocket_server $svr, swoole_http_request $req);

    /**
     * 接收到数据
     * @param swoole_websocket_server $server
     * @param swoole_websocket_frame $frame
     * @return mixed
     */
    public function onMessage(swoole_websocket_server  $server, swoole_websocket_frame $frame);

    /**
     * 服务关闭
     * @param swoole_websocket_server $server
     * @param int $fd
     * @param int $reactorId
     * @return mixed
     */
    public function onClose(swoole_websocket_server $server, int $fd, int $reactorId);
}