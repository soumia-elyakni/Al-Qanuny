<?php
session_start();

spl_autoload_register('autoload');

function autoload($class_name)
{
    $paths = [
        'controllers/',
        'app/classes',
        'database/',
        'models/',
        'public/'
    ];

    $parts= explode('\\',$class_name);
    $name= array_pop($parts);

    foreach ($paths as $path) {
        $file = sprintf($path . '%s.php', $class_name);
        if (is_file($file)) {
            include_once $file;
        }
    }
}


?>