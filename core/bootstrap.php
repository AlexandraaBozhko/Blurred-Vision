<?php 

spl_autoload_register(function ($class) {
    $fileName = $class . '.php';
    $coreFile = __DIR__.DIRECTORY_SEPARATOR.$fileName;
    $commonFile = __DIR__.DIRECTORY_SEPARATOR.'/../common'.DIRECTORY_SEPARATOR.$fileName;

    if (file_exists($coreFile)) {
        require_once $coreFile;
    } else if (file_exists($commonFile)) {
        require_once $commonFile;
    } else {
        throw new \Exception('File not found: ' . $fileName);
    }
});