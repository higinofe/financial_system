<?php

namespace Source\Application;

use Source\Core\shots;

class ControllerApp extends shots
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../viewer/".CONFIG_ENGINE_PROJECT. "/");     
        
    }

    public function home($data)
    {
        

        echo $this->view->render("home", [
            ""
        ]);
       
    }

    public function teste()
    {
        echo '<h1>Ola teste</h>';

    }


}