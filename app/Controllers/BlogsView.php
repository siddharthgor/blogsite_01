<?php

namespace App\Controllers;

use App\Models\Abc;

class BlogsView extends BaseController
{
    public function view()
    {
        $blogs = new Abc();
        $data['title'] = "Blogs";
        $data['blogs'] = $blogs->findAll();
        echo view ('layouts//header' , $data);
        echo view('layouts/index');
    }
}
