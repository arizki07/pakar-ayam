<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'ud_admin';
    protected $allowedFields = ['username', 'password'];

    public function validateLogin($username, $password)
    {
        return $this->where('username', $username)
            ->where('password', $password)
            ->first();
    }
}
