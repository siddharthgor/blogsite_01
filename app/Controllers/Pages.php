<?php

namespace App\Controllers;

use \App\Models\Abc;
use App\Models\BloglssModel;
use App\Models\Categories;
use \App\Models\ContactModel;
use \App\Models\LoginModel;
use \App\Models\SignupModel;
use \App\Models\Update;

class Pages extends BaseController
{
    public $contactModel, $blog_Model, $db;

    public function __construct()
    {
        helper(["database", "url", "form", "function"]);

        $this->contactModel = new ContactModel();
        $this->signupModel = new SignupModel();
        $this->loginModel = new LoginModel();
        $this->blog_Model = new BloglssModel();
        $this->update  = new Update();
        $this->db      = \Config\Database::connect();
    }

    public function login()
    {
        $data = [
            'title' =>  'Login',
        ];

        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        helper(['form']);

        $rules = [
            'phone_number' => [
                'rules' => 'required|exact_length[10]',
                'errors' => [
                    'required' => 'Phone Number Required',
                    'exact_length' => 'Exactly 10 number is allowed',
                    'is_unique' => 'Phone Number is Already Exists'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[3]|',
                'errors' => [
                    'required' => 'Password Required',
                    'min_length' => 'Minimum 8 Characters is Required'
                ],
            ],
        ];


        if ($this->request->getMethod() == 'post') {
            if ($this->validate(($rules))) {
                $loginModel = new LoginModel();
                $result = $loginModel->where('phone_number', $this->request->getVar('phone_number'))->first();

                if ($result != null) {
                    if ($result['password'] == $this->request->getVar('password')) {
                        $result['id'] == $this->request->getVar('id');

                        $session = session();
                        $data['user_name'] = $result['name'];
                        $data['user_id'] =  $result["id"];
                        $data['loggedIN'] = "loggedIN";
                        $session->set($data);

                        $this->response->redirect(base_url());
                    } else {
                        echo '<div class= " alert alert-danger">';
                        echo '<marquee>Enter Valid Password</marquee>';
                        echo '</div>';
                    }
                } else {

                    echo '<div class= " alert alert-danger">';
                    echo '<marquee scrollamount="15">Enter Valid Details</marquee>';
                    echo '</div>';
                }
            } else {

                $data['validation'] = $this->validator;
            }
        }

        echo view('layouts/header', $data);
        echo view('pages/login');
        echo view('layouts/footer');
    }

    public function signup()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        helper(['form']);
        $data = [
            'title' => 'Signup'
        ];
        $rules = [
            'user_name' => [
                'rules' => 'required|min_length[3]|',
                'errors' => [
                    'required' => 'Username Required',
                    'min_length' => 'Minimum 3 Characters is Required'
                ],
            ],
            'phone_number' => [
                'rules' => 'required|exact_length[10]|is_unique[users.phone_number]',
                'errors' => [
                    'required' => 'Phone Number Required',
                    'exact_length' => 'Exactly 10 number is allowed',
                    'is_unique' => 'Phone Number is Already Exists'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email Required',
                    'valid_email' => 'Please Enter Valid Email Address',
                    'is_unique' => 'Email Address Already Exists'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[3]|',
                'errors' => [
                    'required' => 'Password Required',
                    'min_length' => 'Minimum 8 Characters is Required'
                ],
            ],

        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate(($rules))) {
                $cdata = [
                    'name' => $this->request->getVar('user_name'),
                    'phone_number' => $this->request->getVar('phone_number'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $status = $this->signupModel->saveData($cdata);

                if ($status) {
                } else {
                    echo "Error";
                }
            } else {

                $data['validation'] = $this->validator;
            }
        }
        echo view('layouts/header', $data);
        echo view('pages/signup');
        echo view('layouts/footer');
    }

    public function categories()
    {
        $categories = new Categories();

        $data['categories'] = $categories->findAll();

        $data = [
            'title' =>  'Categories',
        ];
        echo view('layouts/header', $data);
        echo view('pages/categories');
        echo view('layouts/footer');
    }

    public function contact()
    {
        $data = [
            'title' =>  'Contact Us',
        ];
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        helper(['form']);
        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'phone_number' => 'required|exact_length[10]',
            'email' => 'required|valid_email',
            'message' => 'required|min_length[10]'
        ];


        if ($this->request->getMethod() == 'post') {
            if ($this->validate(($rules))) {
                $request = \Config\Services::request();
                $validation = \Config\Services::validation();
                helper(['form']);

                $cdata = [
                    'name' => $this->request->getVar('name'),
                    'phone_number' => $this->request->getVar('phone_number'),
                    'email' => $this->request->getVar('email'),
                    'message' => $this->request->getVar('message'),
                ];
                $status = $this->contactModel->saveData($cdata);

                if ($status) {
                } else {
                    echo "Error";
                }
            } else {

                $data['validation'] = $this->validator;
            }
        }
        echo view('layouts/header', $data);
        echo view('pages/contact');
        echo view('layouts/footer');
    }

    public function blog()
    {
        $session = session();


        $data = [
            'title' =>  'New Blog',
        ];
        $rules = [


            'blog_title' => [
                'rules' => 'required|',
                'errors' => [
                    'required' => 'Blog Title Required',
                ]
            ],
            'categories' => [
                'rules' => 'required|',
                'errors' => [
                    'required' => 'Category Required',
                ]
            ],
            'blog_description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Blog Description Required',
                ],
            ],
        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate(($rules))) {
                $cdata = [
                    'author' => $this->request->getVar('author'),
                    'title' => $this->request->getVar('blog_title'),
                    'description' => $this->request->getVar('blog_description'),
                    'category_id' => $this->request->getVar('categories'),
                ];

                $slug = unique_slug($cdata['title']);

                $cdata['slug'] = $slug;
                $status = $this->blog_Model->saveData($cdata);

                if ($status) {
                } else {
                    echo "Error";
                }
            } else {

                $data['validation'] = $this->validator;
            }
        }
        $categories = new Categories();
        $data['categories'] = $categories->findAll();

        echo view('layouts/header', $data);
        echo view('pages/blogs');
        echo view('layouts/footer');
    }
    public function test()
    {
        echo $title = "Sports";
        echo "<br>";
        helper("function");
        echo "Slug : " . $slug = unique_slug($title, "categories");
    }

    public function logout()
    {
        $session = session();
        session_destroy();
        $this->response->redirect(base_url());
    }

    public function update()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        helper(['form']);

        $rules = [
            'user_name' => [
                'rules' => 'required|min_length[3]|',
                'errors' => [
                    'required' => 'Username Required',
                    'min_length' => 'Minimum 3 Characters is Required'
                ],
            ],
            'phone_number' => [
                'rules' => 'required|exact_length[10]|',
                'errors' => [
                    'required' => 'Phone Number Required',
                    'exact_length' => 'Exactly 10 number is allowed',
                    'is_unique' => 'Phone Number is Already Exists'
                ]
            ],
            'email' => [
                'rules' => 'required|',
                'errors' => [
                    'required' => 'Email Required',
                    'valid_email' => 'Please Enter Valid Email Address',
                    'is_unique' => 'Email Address Already Exists'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[3]|',
                'errors' => [
                    'required' => 'Password Required',
                    'min_length' => 'Minimum 8 Characters is Required'
                ],
            ],
        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate(($rules))) {
                $cdata = [

                    'name' => $this->request->getPost('user_name'),
                    'phone_number' => $this->request->getPost('phone_number'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),

                ];
                $status = $this->update->updateData($cdata);

                if ($status) {
                } else {
                    echo "Error";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        $data['users'] = $this->update->where('id', session('user_id'))->find();
        $data['title'] = "Update";
        echo view('layouts/header', $data);
        echo view('pages/update');
        echo view('layouts/footer');
    }
}
