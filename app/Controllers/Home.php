<?php

namespace App\Controllers;

use \App\Models\Abc;
use App\Models\Categories;

class Home extends BaseController
{
    public function index()
    {
        $blogs = new Abc();
        $data['title'] = "Welcome To Our Blog Site";
        $data['blogs'] = $blogs->orderBy('blog_id', 'desc')->findAll();
        $session = session();
        $this->session = \Config\Services::session();
        
        echo view('layouts//header', $data);
        echo view('layouts/index');
        echo view('layouts/footer');
    }

    public function politics()
    {
        $blogs = new Abc();
        $categories = new Categories();
        $data['title'] = "Politics";
        $data['blogs'] = $blogs->select('blogs.title,blogs.slug,blogs.slug,author , blogs.category_id,  , blogs.description,categories.id,categories.name')
            ->join('categories', 'categories.id = blogs.category_id')->where('name', 'Politics')->findAll();
        echo view('layouts//header', $data);
        echo view('categories/all');
        echo view('layouts/footer');
    }

    public function sports()
    {
        $db = \Config\Database::connect();
        $blogs = new Abc();
        $categories = new Categories();
        $data['title'] = "Sports";
        $data['blogs'] = $blogs
            ->select('blogs.title,blogs.slug,author , blogs.category_id,  , blogs.description,categories.id,categories.name')
            ->join('categories', 'categories.id = blogs.category_id')
            ->where('name', 'Sports')->findAll();
        echo view('layouts//header', $data);
        echo view('categories/all');
        echo view('layouts/footer');
    }

    public function current_affairs()
    {
        $blogs = new Abc();
        $data['title'] = "Current Affairs";
        $data['blogs'] = $blogs->select('blogs.title,blogs.slug,blogs.slug,author , blogs.category_id,  , blogs.description,categories.id,categories.name')->join('categories', 'categories.id = blogs.category_id')->where('name', 'Current Affairs')->findAll();
        echo view('layouts//header', $data);
        echo view('categories/all');
        echo view('layouts/footer');
    }

    public function space_research()
    {
        $blogs = new Abc();
        $data['title'] = "Space Research";
        $data['blogs'] = $blogs->select('blogs.title,blogs.slug,blogs.slug,author , blogs.category_id,  , blogs.description,categories.id,categories.name')->join('categories', 'categories.id = blogs.category_id')->where('name', 'Space Research')->findAll();
        echo view('layouts//header', $data);
        echo view('categories/all');
        echo view('layouts/footer');
    }

    public function technology()
    {
        $blogs = new Abc();
        $data['title'] = "Technology";
        $data['blogs'] = $blogs->select('blogs.title,blogs.slug,blogs.slug,author , blogs.category_id , blogs.description,categories.id,categories.name')->join('categories', 'categories.id = blogs.category_id')->where('name', 'Technology')->findAll();
        echo view('layouts//header', $data);
        echo view('categories/all');
        echo view('layouts/footer');
    }

    public function science()
    {
        $blogs = new Abc();
        $data['title'] = "Science";
        $data['blogs'] = $blogs->select('blogs.title,blogs.slug,blogs.slug,author , blogs.category_id , blogs.description,categories.id,categories.name')->join('categories', 'categories.id = blogs.category_id')->where('name', 'Science')->findAll();
        echo view('layouts//header', $data);
        echo view('categories/all');
        echo view('layouts/footer');
    }

    public function viewblog($slug)
    {
        $blogs = new Abc();
        $data['blogs'] = $blogs->where('slug', $slug)->findAll();
        $data['title'] = " Full Blog";

        echo view('layouts//header', $data);
        echo view('viewblog');
        echo view('layouts/footer');
    }
}
