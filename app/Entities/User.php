<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use Role;

class User extends Entity
{

    protected $dates   = ['created_at', 'updated_at', 'last_activity'];

    protected function setPassword(String $password)
    {
        $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);; 
    }
    protected function setName(String $name){
        $this->attributes['name'] = $name.'jeje';
    }

}
