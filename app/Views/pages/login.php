<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="././public/assests/css/style.css" type="text/css" >
     
    <link rel="stylesheet" href="<?= base_url('/public/assests/css/style.css')?>">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <section>
        <body >
            <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Login To Our Site</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                <div class="card"> 
            <div class="img" >
              <!-- <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" width="50%" alt=""> -->
            </div>
            <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
            <div class="w-100">
            <h3 class="mb-4">Sign In</h3>
            <div class="col-md-10">
      <img src="<?= base_url('/public/assests/images/login1.jpg') ?>" class="img-fluid rounded-start" alt="..." width="95%" >
    </div>
            </div>
            <div class="w-100">
            <p class="social-media d-flex justify-content-end">
            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
            </p>
            </div>
            </div>
            


            <form  class="signin-form" method="POST" onsubmit="" action="  ">
            <div class="form-group mt-3">
              <label class="form-control-placeholder text-secondary" for="username">Phone Number</label>
            <input type="text" class="form-control"  name="phone_number" value="<?= set_value('phone_number')?>">
            
            <span class="text-danger" style="font-size: 15px;">
            <?php if(isset($validation)) ?>
            <?php { 
              if($validation= \Config\Services::validation()->hasError('phone_number'))
              {
                echo $validation=\Config\Services::validation()->getError('phone_number');
              }
              ?>
            <?php }?>
            </span>
            </div>
            <div class="form-group">
              <label class="form-control-placeholder text-secondary" for="password">Password</label>
            <input id="password-field" type="password" class="form-control"  name="password" value="<?= set_value('password')?>">

            <span class="text-danger" style="font-size: 15px;">
            <?php if(isset($validation)) ?>
            <?php {  
              if($validation= \Config\Services::validation()->hasError('password'))
              {
                echo $validation=\Config\Services::validation()->getError('password');
              }
              ?>
            <?php }?>
            </span>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <br>
            <div class="form-group">
             <!-- <div class="form-group d-md-flex"> -->
            <div class="w-50 text-left">
              <a href="<?= base_url('/blog') ?>">
                    <button type="submit" class="btn btn-success form-control" name="submit" > Login </button>    </a>
            </div>
            <br>

            <p>Not an User ?</p>
            <br>
            <div class="form-group d-md-flex">
              <br>
            <div class="col-8">
                   <a href="<?= base_url('/signup')?>"> <button type="button" class="btn btn-secondary form-control" name="submit" > Sign Up </button></a>         
            </div>
            <div class="w-50 text-md-right">
              
            
            </div>
            </div>
            </form>
           
            </div>
            </div>
            </div>
            </div>
        </div>
            </section>