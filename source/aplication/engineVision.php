<?php

namespace source\aplication;

class engineVision
{
    public function home()
    {
        echo "aqui";
        echo $this->view->render("home");  
    }
    
}