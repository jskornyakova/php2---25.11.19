<?php

namespace app\services;

class Autoload{
    public function loadClass($className){
        $fileName = str_replace(['app', '\\'], [dirname(__DIR__), DIRECTORY_SEPARATOR], $className) . ".php";
//        var_dump($fileName);
//        exit;
        if (file_exists($fileName)){
            include $fileName;
        }
    }
}