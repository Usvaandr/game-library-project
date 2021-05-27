<?php
// Request CLASS is responsible for fetching information about the current browser request.

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
//      return trim($_SERVER['REQUEST_URI'], '/'); simple way to fetch link for controller
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}