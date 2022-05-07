<?php

class AdminController
{
    static function Index() {
        require_once '../Views/admin.php';
    }

    static function Response() {
        require_once '../Views/response.php';
    }

    static function Store() {
        Admin::Store($_POST);
        header("Location: index.php?page=admin");
    }
}