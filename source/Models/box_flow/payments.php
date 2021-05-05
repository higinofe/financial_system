<?php

namespace Source\Models\box_flow;

use Source\Core\Model;

class payments extends Model
{
    public function __construct()
    {
        parent::__construct("payments", ["id"], 
            ['name', 'type', 'value', 'date']);        
    }
 
    public function createPayments($data)
    {
        $payments = (object) $data;
        $this->name = $payments->name;
        $this->type = $payments->type;
        $this->value = $payments->value;
        $this->date = $payments->date;
        $this->save();
        return $this;
    }

}