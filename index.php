<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;
use source\Core\Model\payments;



$data = ['name' => 'casa', 'type' => 'mensal', 'value' => '1500.00'];

//var_dump($data);

//$payments = new Router();
$payments1 = new payments();


