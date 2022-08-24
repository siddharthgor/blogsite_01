<?php

namespace App\Models;

use CodeIgniter\Model as CodeIgniterModel;
use \Config\Model;

class ContactModel extends CodeIgniterModel
{

    public function saveData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('contact_us');


        $res = $builder->insert($data);

        if ($res >= 1) {
            return true;
            die();
        } else {
            return false;
        }
    }
}
