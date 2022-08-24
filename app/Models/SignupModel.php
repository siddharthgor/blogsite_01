<?php 

namespace App\Models;


use CodeIgniter\Model as CodeIgniterModel;

class SignupModel extends CodeIgniterModel {

    public function saveData($data) 
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        
        
        $res = $builder->insert($data);
            
    
         
         if($res >= 1)
         {
            return true ;
            die();

         }
         else
         {
            return false;
         }
    }
}