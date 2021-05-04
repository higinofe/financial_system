<?php

namespace Source\Core;

use League\Plates\Engine;


class View 
{
    private $engine;

    public function __construct(string $path = CONFIG_VIEW_PATH, string $ext = CONFIG_VIEW_EXT)
    {
        $this->engine = Engine::create($path, $ext);
    }

    public function path(string $name, string $path)
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    public function render(string $templateName, array $data)
    {
        return $this->engine->render($templateName, $data);
    }

    public function engine()
    {
        return $this->engine();
    }
}