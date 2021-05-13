<?php
ob_start();

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;


$route = new Router(url());

$route->namespace('Source\Application');

$route->group(null);
$route->get("/", "ControllerApp:dash");

$route->get("/lancamentos", "ControllerApp:userIndex");
$route->get("/criacao", "ControllerApp:userCreate");


$route->dispatch();

$route->group("/ops");
$route->get("/{errcode}", "Web:error");


/*
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}
*/
ob_end_flush();