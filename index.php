<?php
ob_start();

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;


$route = new Router(url());
$route->namespace('Source\Application');

/**
 * Rotas aplication
 */
$route->group(null);
$route->get("/", "ControllerApp:dash");
$route->get("/fluxo", "ControllerApp:userIndex");
$route->get("/criacao", "ControllerApp:userCreate");
$route->post("/criacao", "ControllerApp:userCreate");
/**
 * Error
 */
$route->group("/ops");
$route->get("/{errcode}", "ControllerApp:error");


$route->dispatch();
/*

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}*/


ob_end_flush();