<?php helper('url');
helper('html'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/public/assests/css/style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet" </head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <center>
                <a class="navbar-brand" href="<?php echo base_url() ?>">Blog Site </a>
            </center>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div id="welcome-  user" class="user">
                <?php
                if (session()->has('loggedIN')) {
                    echo 'Welcome ,' . session('user_name');
                } ?>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= base_url('/categories') ?>">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a></li>
                    <?php
                    if (session()->has('loggedIN')) { ?>
                        <div class="d-flex align-items-center">
                            <div class="dropdown me-2">
                                <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="<?= base_url('/blog') ?>">Create Blog </a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('/update') ?>">Edit Profile </a>
                                </ul>
                            </div>
                            <br>
                            <a class="nav-link px-md-0 py-0 py-lg-" href="<?= base_url('/logout') ?>"><button type="button " class="btn  btn-outline-dark  me-1 ">Logout </button></a>
                        </div>
                    <?php } else { ?>
                        <div class="d-flex align-items-center">
                            <a class="nav-link px-md-0 py-0 py-lg-" href="<?= base_url('/login') ?>"><button type="button " id="login" class="btn  btn-success me-1       ">
                                    Login </button></a>
                            <a class="nav-link px-lg-1 py-0 py-md-1" href="<?= base_url('/signup') ?>">
                                <button type="button" id="button" class="btn btn-primary  ">
                                    Sign up for free </button> </a>
                        <?php   } ?>
                </ul>
            </div>
        </div>
    </nav>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("textarea ,input").focus(function() {
                $(this).css("background-color", "#FFFF99");
            });
            $("input , textarea").blur(function() {
                $(this).css("background-color", "");
            });
        });
    </script>
</body>

</html>