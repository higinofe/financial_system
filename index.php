<?php
ob_start();

require __DIR__ . '/vendor/autoload.php';


use CoffeeCode\Router\Router;

$route = new Router(url());
$route->namespace('Source\Application');

/**
 * Rotas aplication for
 */
$route->group(null);
$route->get("/", "ControllerApp:dash");
$route->get("/fluxo", "ControllerApp:fluxoIndex");
$route->get("/criacao", "ControllerApp:fluxoCreate");
$route->post("/criacao", "ControllerApp:fluxoCreate");
$route->get("/categoria", "ControllerApp:category" );
$route->post("/categoria", "ControllerApp:category" );
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
