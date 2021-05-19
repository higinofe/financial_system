<?php

namespace Source\Models\box_flow;

use Source\Core\Model;

class payments extends Model
{
    public function __construct()
    {
        parent::__construct("payments", ["id"], 
            ['title', 'category', 'valor', 'obs']);        
    }
 
    public function createPayments($data)
    { 
        $this->title = $data->title;
        $this->category = $data->category;
        $this->valor = $data->valor;
        $this->obs = $data->obs;
        $this->placed = $data->placed;
        $this->save();
        return $this;
    }

    public function consultPayments()
    {
        return (new payments())->findById(79);
    }


}
