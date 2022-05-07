<?php

abstract class Connection
{
    static function getConn() {
        $conn = new PDO('mysql:host=localhost;dbname=loldesign;', 'root', 'root!@#');

        return $conn;
    }

}