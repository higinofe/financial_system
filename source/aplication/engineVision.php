<?php

namespace source\aplication;

use Source\Core\Controller;
use Source\Core\View;

class engineVision extends Controller
{     
    
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../viewer/" . CONFIG_VIEW_THEME . "/");

    }


    public function home(): void
    {
        $head = 'teste';

        echo $this->view->render("home");
        
    }

    public function redirect(): void
    {
        $this->roteador->redirect ("name.hello");
    }
    
}