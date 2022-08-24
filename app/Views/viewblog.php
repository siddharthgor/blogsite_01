<div class="container">
    <div class="container">
        <div class="row jusitfy-content-center">
            <div class="col-md-12 text-center">
                <h2 class="h2"> Blog Written By Our User</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <?php foreach ($blogs as $product) { ?>
            <div class="row-sm-12">
                <div class="col-lg-12">
                    <div class="card" id="card1">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['title'] ?> </h5>
                            <p class="card-text"><?= $product['description'] ?></p>
                            <p class="card-text text-author"> Author : <?= $product['author'] ?> </p>
                        </div>
                    </div>
                </div>
                <br>
            <?php } ?>
            </div>
    </div>
</div>