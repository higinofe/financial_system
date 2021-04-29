<?php

namespace source\Models;

use source\Core\Model;

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
        $this->save();
        
        return $this;
        




    }



}