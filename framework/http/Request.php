<?php

namespace http;

class Request {

    /**
     * 获取get数据.
     *
     * @param $name
     * @param string $default
     */
    public function get($name, $default = '')
    {
        return isset($_GET[$name]) ? $_GET[$name] : $default;
    }

    /**
     * 获取post数据.
     *
     * @param $name
     * @param string $default
     */
    public function post($name, $default = '')
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }

    /**
     * 获取端口号.
     * @return integer|null
     */
    public function getServerPort()
    {
        return isset($_SERVER['SERVER_PORT']) ? (int)$_SERVER['SERVER_PORT'] : null;
    }

    /**
     * 获取 URL referrer.
     * @return string|null URL
     */
    public function getReferrer()
    {
        return isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
    }

    /**
     * 获取 user agent.
     * @return string|null user agent, null if not available
     */
    public function getUserAgent()
    {
        return isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
    }

    /**
     * 获取 user IP address.
     * @return string|null user IP address, null if not available
     */
    public function getUserIP()
    {
        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
    }

    /**
     * 获取REMOTE_HOST.
     * @return string|null user host name, null if not available
     */
    public function getUserHost()
    {
        return isset($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : null;
    }

    /**
     * 获取授权用户.
     *
     * @return string|null
     */
    public function getAuthUser()
    {
        return isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : null;
    }

    /**
     * 获取授权用户密码.
     * @return string|null
     */
    public function getAuthPassword()
    {
        return isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : null;
    }

    /**
     * 判断是不是ajax.
     *
     * @return bool
     */
    public function getIsAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    /**
     * 获取SERVER的其他参数.
     *
     * @return string|null
     */
    public function getServerParameter(string $key) 
    {
        return isset($_SERVER[$key]) ? $_SERVER[$key] : null;
    }

}