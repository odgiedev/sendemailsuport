<?php
    require_once '../Core/Core.php';
    require_once '../Controllers/HomeController.php';
    require_once '../Controllers/AdminController.php';
    require_once '../Controllers/ErrorController.php';
    require_once '../Database/Connection.php';
    require_once '../Models/User.php';
    require_once '../Models/Admin.php';

    Core::start($_GET);
?>
