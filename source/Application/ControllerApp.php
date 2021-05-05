<?php

namespace Source\Application;

use Source\Core\shots;
use Source\Core\ViewEngine;

class ControllerApp extends shots
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../viewer/layout/");
        
    }

    public function home($data)
    {

        $this->ViewEngine->render("home", $data);
       
    }

    public function teste()
    {
        echo '<h1>Ola teste</h>';

    }


}