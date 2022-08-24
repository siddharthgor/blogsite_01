<?php

namespace App\Models;

use CodeIgniter\Model as CodeIgniterModel;

class Update extends CodeIgniterModel
{
     protected $table = 'users';
    protected $primarykey = 'id';
    protected $allowedFields = ['user_name', 'phone_number', 'password', 'email'];

    public function updateData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $res = $builder->where('id', session('user_id'))->update($data);
        if ($res >= 1) {
            return true;
            die();
        } else {
            return false;
        }
    }
}
