<?php

class Router
{

    private static $GET_ROUTES = [];
    private static $POST_ROUTES = [];

    public static function get($route, $callback)
    {
        static::$GET_ROUTES[$route] = $callback;
    }

    public static function post($route, $callback)
    {
        static::$POST_ROUTES[$route] = $callback;
    }

    public static function loadRoute($uri, $request_type)
    {
        $routes = null;
        switch ($request_type) {
            case Request::POST:
                $routes = static::$POST_ROUTES;
                break;
            case Request::GET:
                $routes = static::$GET_ROUTES;
                break;
        }

        if (array_key_exists($uri, $routes)) {
            $callback = $routes[$uri];
            echo $callback();
        } else {
            echo view('404');
        }
    }
}