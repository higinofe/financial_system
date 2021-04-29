<?php

use source\Models\payments;

require __DIR__ . "/vendor/autoload.php";


$data = ['name' => 'Casa', 'type' => '1', 'value' => '1000'];

$payments1 = new payments;
$payments1->createPayments($data);