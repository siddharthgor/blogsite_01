<?php 
namespace App\Controllers ;

use CodeIgniter\Controller;

class Demo extends Controller {

    public function index()
    {
        echo view('viewb');
    }
}