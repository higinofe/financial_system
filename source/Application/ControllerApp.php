<?php

namespace Source\Application;

use Source\Core\shots;

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
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("users/index.php",
        [
            "head" => $head
        ]);
    }

    public function userCreate()
    {
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("users/create.php",
        [
            "head" => $head
        ]);

    }

}