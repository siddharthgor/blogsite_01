<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login To Site </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylsheet" href="<?= base_url('/style.css') ?>" type="text/css">


  <link rel="stylesheet" href="././public/assests/css/style.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('/public/assests/css/style.css') ?>">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>

  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Sign Up To Our Site</h2>
            
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
              <div class="card" id="card">
                <div class="img">
                  <!-- <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" width="50%" alt=""> -->
                </div>
                <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                    <div class="w-100">
                      <h3 class="mb-4">Sign Up</h3>
                      <div class="col-md-12">
      <img src="<?= base_url('/public/assests/images/login.svg') ?>" class="img-fluid rounded-start" alt="..." width="95%" >
    </div>
                    </div>
                    <div class="w-100">
                      <p class="social-media d-flex justify-content-end">
                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                      </p>
                    </div>
                  </div>
                  <div>
                      <?php 
                       if(!isset($validation) && isset($_POST['submit']))
                       
                        
                        { 
                            ?>  
                            <script>
                                setTimeout (function() {
                                    $("#success").fadeIn(1000).fadeOut();
                                } , 2500);
                            </script>
                            <div id="success"> 
                              <br>

                            <div class = "alert alert-success" >
                              
                                <span>Sign Up Successfully</span>
                            </div>
                            </div>
                        <?php  
                        }
                       
                       ?>



                    <?= form_open();     ?>
                    <div class="form-group mt-3">
                      <input type="text" maxlength="50" name="user_name" class="form-control" value="<?= set_value('user_name') ?>">

                      <label class="form-control-placeholder" for="username">Username</label>
                      <span class="text-danger" style="font-size: 15px;">
                        <?php if (isset($validation)) ?>
                        <?php {
                          if ($validation = \Config\Services::validation()->hasError('user_name')) {
                            echo '*'. $validation = \Config\Services::validation()->getError('user_name');
                          }
                        ?>
                        <?php } ?>
                      </span>
                    </div>
                    <div class="form-group mt-3">
                      <input type="number" maxlength="10" name="phone_number" class="form-control" id="validationCustom01" value="<?= set_value('phone_number') ?>">
                      <label class="form-control-placeholder" for="username">Phone Number</label><span class="text-danger" style="font-size: 15px;">
                        <?php if (isset($validation)) ?>
                        <?php {
                          if ($validation = \Config\Services::validation()->hasError('phone_number')) {
                            echo '*'.$validation = \Config\Services::validation()->getError('phone_number');
                          }
                        ?>
                        <?php } ?>
                      </span>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>">
                      <label class="form-control-placeholder" for="username">Email</label>
                      <span class="text-danger" style="font-size: 15px;">
                        <?php if (isset($validation)) ?>
                        <?php {
                          if ($validation = \Config\Services::validation()->hasError('email')) {
                            echo '*'. $validation = \Config\Services::validation()->getError('email');
                          }
                        ?>
                        <?php } ?>
                      </span>
                    </div>
                    <div>
                      <div class="form-group mt-3">
                        <input id="password-field" type="password" name="password" class="form-control" value="<?= set_value('password') ?>">
                        <label class="form-control-placeholder" for="password">Password</label>
                        <span class="text-danger" style="font-size: 15px;">
                          <?php if (isset($validation)) ?>
                          <?php {
                            if ($validation = \Config\Services::validation()->hasError('password')) {
                              echo '*'.$validation = \Config\Services::validation()->getError('password');
                            }
                          ?>
                          <?php } ?>
                        </span>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="submit">Sign Up</button>
                    </div>
                    <div class="form-group d-md-flex">
                      <div class="w-50 text-left">

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
  </body>

</html>