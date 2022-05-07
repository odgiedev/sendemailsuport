<?php

class Core
{
    public static function start($Get) {
        if(isset($Get['page'])) {
            $controller = ucFirst($Get['page'].'Controller');
        } else {
            $controller = 'HomeController';
        }

        if(isset($Get['action'])) {
            $action = ucFirst($Get['action']);
        } else {
            $action = 'Index';
        }

        if (!class_exists($controller)) {
            $controller = 'ErrorController';
        }

        $controller::$action();
    }
}