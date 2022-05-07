<?php

class ErrorController
{
    static function Index() {
        echo '<h1> Page not found. </h1>';
        die();
    }
}