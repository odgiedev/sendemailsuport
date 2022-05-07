<?php

class HomeController
{
    static function Index()
    {
        require_once '../Views/home.php';
    }

    static function Store()
    {
        User::Store($_POST);
        header("Location: index.php");
    }
}
