<?php
namespace App\Models;
use CodeIgniter\Model;
class Abc extends Model
{
    protected $table      = 'blogs';

    protected $primaryKey = 'blogs_id';

    protected $returnType = 'array';

    protected $allowedFields = ['blog_id', 'user_id', 'blog_title', 'blog_description', 'first_name_user', 'last_name_user', 'categories'];
}
