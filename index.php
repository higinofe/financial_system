<?php
ob_start();

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;


$route = new Router(url());

$route->namespace('Source\Application');

$route->group(null);
$route->get("/", "ControllerApp:theme");
$route->get("/dash", "ControllerApp:dash");
$route->get("/dash/home", "ControllerApp:home");

$route->dispatch();

$route->group("/ops");
$route->get("/{errcode}", "Web:error");

/*

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}
*/
ob_end_flush();