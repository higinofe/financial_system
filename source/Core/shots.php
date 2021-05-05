<?php

namespace Source\Core;

class shots
{
    protected $view;
    protected $seo;
    protected $message;

    public function __construct($pathToViews = null)
    {
        $this->view = new ViewEngine($pathToViews);        
    }

}