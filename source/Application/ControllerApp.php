<?php

namespace Source\Application;

use Source\Core\shots;

class ControllerApp extends shots
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../viewer/".CONFIG_ENGINE_PROJECT. "/");     
        
    }

    public function enter($data)
    {
        $head = CONFIG_SITE_TITLE;
        

        echo $this->view->render("enter", [
            "head" => $head
        ]);
       
    }

    public function teste()
    {
        echo '<h1>Ola teste</h>';

    }

    public function dash()
    {
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("dash", [
            "app" => "control/home",
            "head" => $head
        ]);

    }

    public function home()
    {
        echo $this->view->render("dash/home", [
            ""
        ]);

    }

}