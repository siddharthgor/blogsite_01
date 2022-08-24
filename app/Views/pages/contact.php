

<div class="container" id="scroll-container">
    <div class="row jusitfy-content-center">
        <div class="col-md-12 text-center">
            <h4 class="h4" id="">We’re here to help and answer any question you might have. We look forward to hearing from you</h4>
        </div>
    </div>
</div>


<div class="contanier" >
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card form-control ">
                <div class="card-body">
                    <div class="col-md-">
      <img src="<?= base_url('/public/assests/images/contact.webp') ?>" class="img-fluid rounded-start" alt="..."  >
    </div>
    <br>
                    <div class="card-title text-center">
                        <h5>Get in Touch !!</h5>
                    </div>
                       <?php 
                       if(!isset($validation) && isset($_POST['submit']))
                       
                        
                        { 
                            ?>  
                            <script>
                                setTimeout (function() {
                                    $("#success").fadeIn(1000).fadeOut();
                                } , 2500);
                            </script>
                            <div class = "alert alert-success" id="success">
                                <span>Your Message Has Been Sent Successfully</span>
                            </div>
                        <?php  
                        }
                       
                       ?>
                        
                    <form action="http://localhost/blogsite/contact" method="post">
                        <div class="card-title">
                            <label for="name">Name</label>

                            <span class="text-danger" style="font-size: 15px;">
                                <?php if (isset($validation)) ?>
                                <?php {
                                    if ($validation = \Config\Services::validation()->hasError('name')) {
                                        echo '*'.$validation = \Config\Services::validation()->getError('name');
                                    }
                                ?>
                                <?php } ?>
                            </span>

                            <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>">
                           
                            <label for="name">Phone Number</label>

                            <span class="text-danger" style="font-size: 15px;">
                                <?php if (isset($validation)) ?>
                                <?php {
                                    if ($validation = \Config\Services::validation()->hasError('phone_number')) {
                                        echo '*'.$validation = \Config\Services::validation()->getError('phone_number');
                                    }
                                ?>
                                <?php } ?>
                            </span>
                            <input type="text" class="form-control" name="phone_number" value="<?= set_value('phone_number') ?>">


                            <label for="name">Email</label>

                            <span class="text-danger" style="font-size: 15px;">
                                <?php if (isset($validation)) ?>
                                <?php {
                                    if ($validation = \Config\Services::validation()->hasError('email')) {
                                        echo '*'.$validation = \Config\Services::validation()->getError('email');
                                    }
                                ?>
                                <?php } ?>
                            </span>
                            <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>">
                            <label for="">Message</label>

                            <span class="text-danger" style="font-size: 15px;">
                                <?php if (isset($validation)) ?>
                                <?php {
                                    if ($validation = \Config\Services::validation()->hasError('message')) {
                                        echo '*'.$validation = \Config\Services::validation()->getError('message');
                                    }
                                ?>
                                <?php } ?>
                            </span>
                            <textarea name="message" class="form-control" id="" cols="3" rows="2"><?= set_value('message') ?></textarea>
                            <br>

                            <button class="btn btn-danger form-control" type="submit" name="submit"> Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>