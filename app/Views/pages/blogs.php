<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Want To Write A Blog </h2>
                <h4 class="heading-section">Write Here</h4> 
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="wrap">
                        <div class="card" id="card">
                            <div class="img">
                            </div>
                            <div class="login-wrap p- p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Create Blog</h3>
                                        <div class="col-md ">
                                            <img src="<?= base_url('/public/assests/images/blog.jpg') ?>" class="img-fluid rounded-start" alt="..." style="size: 150px;">
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <p class="social-media d-flex justify-content-end">
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <form method="POST">
                                    <?php
                                    if (!isset($validation) && isset($_POST['submit'])) {
                                    ?>
                                        <div class="alert alert-success" id="success1">
                                            <span>Blog Created Successfully</span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                     <input type="hidden" id="form6Example3" class="form-control" name="author" value="<?= ucwords(session('user_name')) ?>"  />
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example3" class="form-control" name="blog_title" />
                                        <label class="form-label" for="form6Example3">Blog Title</label>
                                        <span class="text-danger" style="font-size: 15px;">
                                            <?php if (isset($validation)) ?>
                                            <?php {
                                                if ($validation = \Config\Services::validation()->hasError('blog_title')) {
                                                    echo '*' . $validation = \Config\Services::validation()->getError('blog_title');
                                                }
                                            ?>
                                            <?php } ?>
                                        </span>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <select class="form-select" name="categories">
                                            <option value="">Choose Categories</option>
                                            <?php foreach ($categories as $category) { ?>
                                            <option value="<?= $category['id'] ?>"><?= $category['name'] ?> <?php } ?> </option>
                             
                                        </select>
                                        <label class="form-label" for="form6Example3">Category</label>
                                        <span class="text-danger" style="font-size: 15px;">
                                            <?php if (isset($validation)) ?>
                                            <?php {
                                                if ($validation = \Config\Services::validation()->hasError('categories')) {
                                                    echo '*' . $validation = \Config\Services::validation()->getError('categories');
                                                }
                                            ?>
                                            <?php } ?>
                                        </span>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="form6Example7" rows="4" name="blog_description"></textarea>
                                        <label class="form-label" for="form6Example7">Blog Description</label>
                                        <span class="text-danger" style="font-size: 15px;">
                                            <?php if (isset($validation)) ?>
                                            <?php {
                                                if ($validation = \Config\Services::validation()->hasError('blog_description')) {
                                                    echo '*' . $validation = \Config\Services::validation()->getError('blog_description');
                                                }
                                            ?>
                                            <?php } ?>
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-primary  mb-8" name="submit">
                                        Submit Your Blog
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<script>

$("#success1").submit(function(){
    $("div").show();
    $("div").fadeOut()
}
)
</script>