<?php 

spl_autoload_register(function ($class) {
    $fileName = $class . '.php';

    if (file_exists('core'.DIRECTORY_SEPARATOR.$fileName)) {
        require_once 'core'.DIRECTORY_SEPARATOR.$fileName;
    } else if (file_exists('common'.DIRECTORY_SEPARATOR.$fileName)) {
        require_once 'common'.DIRECTORY_SEPARATOR.$fileName;
    } else {
        throw new \Exception('File not found: ', $fileName);
    }
});