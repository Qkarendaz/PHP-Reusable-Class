<?php
spl_autoload_register('ClassAutoloader');

function ClassAutoloader($classname) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    $ext = '.php';
    require_once $path . $classname . $ext;
    
}