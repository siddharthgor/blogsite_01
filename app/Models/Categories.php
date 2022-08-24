<?php

namespace App\Models;

use CodeIgniter\Model;

class Categories extends Model
{
	protected $table      = 'categories';

	protected $primaryKey = 'categories_id';

	protected $returnType = 'array';

	protected $allowedFields = ['categories_id', 'categories_name' ];
}	