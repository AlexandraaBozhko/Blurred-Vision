<?php 

include __DIR__ . '/core/bootstrap.php';

$paths = [
    'about' => 'pages',
    'services' => 'pages',
    'portfolio' => 'pages',
    'contacts' => 'pages',
    'blog' => 'pages',
];

$path = parse_url($_SERVER['REQUEST_URI']);
$path = explode('/', $path['path']);
$page = empty($path[1]) ? 'main' : $path[1];
if ($page === 'index') {
    $page = 'main';
}


try {  
    if (isset($paths[$page])) {
        $page = $paths[$page] . DIRECTORY_SEPARATOR . $page;
    }
    $page = $page . '.php';

    $pageTitle = 'Unknown';
    if (file_exists($page) && count($path) < 3) {
        require_once __DIR__ . DIRECTORY_SEPARATOR . $page;
    } else {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '404.php';
    }

} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}