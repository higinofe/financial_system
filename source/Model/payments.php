<?php

namespace source\Core\Model;

use source\Core\Model;

class payments extends Model
{
    public function __construct()
    {
        parent::__construct("payments", ["id"], 
            ['name', 'type', 'value', 'date']);        
    }

    public function paymentsOk($data)
    {
        var_dump($data);

    } 


}