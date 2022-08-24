<div class="container">
    <div class="container">
        <div class="row jusitfy-content-center">
            <div class="col-md-12 text-center">
                <h2 class="h2"> Few Blogs Written By Our Users</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container1">
        <?php
        foreach ($blogs as $product) { ?>
            <div class="row-sm-12">
                <div class="col-lg-12">
                    <div class="card" id="card1">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['title'] ?></h5>
                            <p class="card-text" id="home"><?= $product['description'] ?></p>
                            <p class="card-text text-author"> Author : <?= $product['author'] ?></p>
                            <a href="<?= base_url('/blog/') ?><?= '/' . strtolower(url_title(($product['slug']))) ?>" class="btn  btn-outline-dark" id="read">Read Full </a>
                        </div>
                    </div>
                </div>
                <br>
            <?php } ?>
            </div>
    </div>
</div>