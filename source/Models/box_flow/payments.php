<?php

namespace Source\Models\box_flow;

use Source\Core\Model;

class payments extends Model
{
    public function __construct()
    {
        parent::__construct("payments", ["id"], 
            ['title', 'centcusto']);        
    }
 
    public function createPayments($data)
    {
        $date = date('Y-m-d');
        $date = ['date' => $date];
        $date = (object)$date;

        $this->title = $data->title;
        $this->centcusto = $data->category;
        $this->placed = $data->placed;
        $this->value = $data->value;
        $this->due_at = $data->due_at;
        $this->obs = $data->obs;
        $this->rep = $data->repeat;
        $this->responsible = $data->responsible;
        $this->date = $date->date;
        $this->status = $data->status;
        $this->save();
        return $this;
    }

    public function consultPaymentId()
    {
        return (new payments())->findById($this->id);
    }

    public function consultPayments()
    {
        return (new payments())->fetch();
    }


}
