<?php

namespace App\Controllers;
// use CodeIgniter\Controller ;
use App\Models\Users_model;
use CodeIgniter\Model;
// use Tests\Support\Models\UserModel;

class Users extends BaseController
{
    public function index()
  {
       

        $userModel = new Users_model();

       $data['users'] = $userModel->getData();
        
       return view('dataview' ,$data);


    }  

}
