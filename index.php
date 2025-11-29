<?php

require __DIR__ . '/vendor/autoload.php';

use App\Repositories\InMemoryUserRepository;
use App\Services\UserService;
use App\Controllers\UserController;

// Create objects manually (or you could use a DI container)
$repo = new InMemoryUserRepository();
$service = new UserService($repo);
$controller = new UserController($service);

$uri = $_GET['route'] ?? 'users';

switch ($uri) {
    case 'users':
        $controller->list();
        break;
    case 'user':
        $controller->show((int)($_GET['id'] ?? 0));
        break;
    default:
        echo "404 - Route not found";
}
