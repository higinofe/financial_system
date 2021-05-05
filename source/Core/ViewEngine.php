<?php

namespace Source\Core;


class ViewEngine
{
    private $engine;

    public function __construct($path = CONFIG_URL_LAYOUT,  $ext = CONFIG_URL_EXT) 
    {

        $this->engine = Engine::create($path, $ext);
    }

    public function path($name, $path)
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    public function render($templateName, $data)
    {
        return $this->engine->render($templateName, $data);
        
    }

    public function engine()
    {
        return $this->engine();
    }

}