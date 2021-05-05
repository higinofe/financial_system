<?php

namespace Source\Models\user;

use Source\Core\Model;

class users extends Model
{

    public function __construct()
    {
        parent::__construct("users", ["id"],
            ['name', 'email', 'password', 'active', 'date']);        
    }

    public function createUser($data)
    {
        $createUser = (object) $data;        
        $this->name = $createUser->name;
        $this->email = $createUser->email;
        $this->password = $createUser->password;
        $this->active = $createUser->active;
        $this->date = $createUser->date;
        $this->save();     
        return $this;   
    }

}