<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;



$route = new Router(url(), ":");
$route->namespace("source\aplication");

$route->get("/", "engineVision:home");


/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}



