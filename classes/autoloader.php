<?php

function autoload($className) {
    $paths = ['','classes'];
    foreach($paths as $path) {
//        echo $path;
        $file = "$path/$className.php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
}

spl_autoload_register('autoload');
