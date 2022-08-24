<?php

namespace App\Models;

use CodeIgniter\Model;

class BloglssModel extends Model
{
    protected $table      = 'blogs';

    protected $primaryKey = 'blogs_id';

    protected $returnType = 'array';

    protected $allowedFields = ['blog_id', 'user_id', 'blog_title', 'blog_description', 'author' , 'categories'];


    public function saveData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('blogs');

        $res = $builder->insert($data);

        if ($res >= 1) {
            return true;
            die();
        } else {
            return false;
        }
    }
}
