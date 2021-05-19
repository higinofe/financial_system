<?php

namespace Source\Application;

use Source\Core\shots;
use Source\Models\box_flow\payments;

class ControllerApp extends shots
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../viewer/".CONFIG_ENGINE_PROJECT. "/");     
        
    }

    public function dash($data)
    {
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("dashboard/index.php", [
            "head" => $head
        ]);      
    }

    public function userIndex()
    {
        $paymentsList = new payments();
        $paymentsList->consultPayments();
        var_dump($paymentsList);
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("users/index.php",
        [
            "head" => $head
        ]);
    }

    public function userCreate($data)
    {
        if(!empty($data)){
        $data = (object) $data;
        $payments = new payments;
        $payments->createPayments($data);
        }

        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("users/create.php",
        [
            "head" => $head
        ]);
    }

    public function error()
    {
        echo "OPS ERRO!";
    }

}