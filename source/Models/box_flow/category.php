<?php

namespace Source\Models\box_flow;

use Source\Core\Model;

class category extends Model
{
    public function __construct()
    {
        parent::__construct('category', ['id'],
        ['nome']);
        
    }

    public function createcategory($data)
    {
        $date = date('Y-m-d');
        $date = ['date' => $date];
        $date = (object)$date;

        $this->nome = $data->category;
        $this->obs = $data->obs;
        $this->date = $date->date;
        $this->save();

    }
}