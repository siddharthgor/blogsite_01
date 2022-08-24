<?php 

namespace App\Models;


use CodeIgniter\Model as CodeIgniterModel;
use \Config\Model; 

class LoginModel extends CodeIgniterModel {

    

        protected $table = 'users';

        protected $allowedFields = ['user_name','phone_number','email','password'];
        
    

}