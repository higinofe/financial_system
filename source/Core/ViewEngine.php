<?php

namespace Source\Core;

use League\Plates\Engine;

class ViewEngine
{
    private $control;

    public function __construct($path = CONFIG_ENGINE_PROJECT,  $ext = CONFIG_ENGINE_EXT) 
    {
        $this->control = Engine::create($path, $ext);
    }

    public function path($name, $path)
    {
        $this->control->addFolder($name, $path);
        return $this;
    }

    public function render($templateName, $data = [])
    {
        return $this->control->render($templateName, $data);
        
    }

    public function engine()
    {
        return $this->engine();
    }

}