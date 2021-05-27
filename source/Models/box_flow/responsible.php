<?php

namespace Source\Models\box_flow;

use Source\Core\Model;

class responsible extends Model
{
    function __construct()
    {
        parent::__construct("responsible", ["id"], [
            "nome"
        ]); 
    }

    public function consultResponseId()
    {
        return (new payments())->findById($this->id);
    }


}