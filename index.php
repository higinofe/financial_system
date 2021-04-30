<?php
ob_start();

use CoffeeCode\Router\Router;
require __DIR__ . "/vendor/autoload.php";


$route = new Router(url(), ":");
$route->namespace("source\aplication");

$route->group(null);
$route->get("/", "engineVision:home");


if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}


ob_end_flush();