<div class="row">
    <?php foreach ($cats as $k => $v) : ?>
        <div class="col s3 m3">
            <div class="card">
                <div class="card-image" style="display:flex;justify-content:center">
                    <img class="" src="/<?= $v['image'] ?>" style="height: 150px;width:150px;">
                </div>
                <div class="card-content">
                    <p class="card-title center-align"><?= $v['name'] ?></p>
                </div>
                <div class="card-action">
                    <center><a href="category/products?cat_id=<?= $v['id'] ?>&cat_name=<?= $v['name'] ?>" class="">Перейти в категорию</a></center>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>