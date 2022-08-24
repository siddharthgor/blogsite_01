<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Update Your Profile</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="card" id="card">
                            <div class="img">
                            </div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4"> Update</h3>
                                        <div class="col-md-12">
                                            <img src="<?= base_url('/public/assests/images/login.svg') ?>" class="img-fluid rounded-start" alt="..." width="95%">
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
                                    if (!isset($validation) && isset($_POST['submit'])) {
                                    ?>
                                        <script>
                                            setTimeout(function() {
                                                $("#success").fadeIn(1000).fadeOut();
                                            }, 2500);
                                        </script>
                                        <div id="success">
                                            <br>
                                            <div class="alert alert-success">
                                                <span>Update Successfully</span>
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>
                                    <?php foreach ($users as $user) { ?>
                                        <?= form_open();     ?>
                                        <div class="form-group mt-3">
                                            <input type="text" maxlength="50" name="user_name" class="form-control" value="<?= $user['name'] ?>">

                                            <label class="form-control-placeholder" for="username">Username</label>
                                            <span class="text-danger" style="font-size: 15px;">
                                                <?php if (isset($validation)) ?>
                                                <?php {
                                                    if ($validation = \Config\Services::validation()->hasError('user_name')) {
                                                        echo '*' . $validation = \Config\Services::validation()->getError('user_name');
                                                    }
                                                ?>
                                                <?php } ?>
                                            </span>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="number" maxlength="10" name="phone_number" class="form-control" id="validationCustom01" value="<?= $user['phone_number'] ?>">
                                            <label class="form-control-placeholder" for="username">Phone Number</label><span class="text-danger" style="font-size: 15px;">
                                                <?php if (isset($validation)) ?>
                                                <?php {
                                                    if ($validation = \Config\Services::validation()->hasError('phone_number')) {
                                                        echo '*' . $validation = \Config\Services::validation()->getError('phone_number');
                                                    }
                                                ?>
                                                <?php } ?>
                                            </span>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="readonly" class="form-control" name="email" value="<?= $user['email'] ?>">
                                            <label class="form-control-placeholder" for="username">Email</label>
                                            <span class="text-danger" style="font-size: 15px;">
                                                <?php if (isset($validation)) ?>
                                                <?php {
                                                    if ($validation = \Config\Services::validation()->hasError('email')) {
                                                        echo '*' . $validation = \Config\Services::validation()->getError('email');
                                                    }
                                                ?>
                                                <?php } ?>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="form-group mt-3">
                                                <input id="password-field" type="text" name="password" class="form-control" value="<?= $user['password'] ?>">
                                                <label class="form-control-placeholder" for="password">Password</label>
                                                <span class="text-danger" style="font-size: 15px;">
                                                    <?php if (isset($validation)) ?>
                                                    <?php {
                                                        if ($validation = \Config\Services::validation()->hasError('password')) {
                                                            echo '*' . $validation = \Config\Services::validation()->getError('password');
                                                        }
                                                    ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </span>
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="submit">Update Profile</button>
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