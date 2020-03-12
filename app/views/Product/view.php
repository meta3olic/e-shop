<div class="row">
    <?php foreach ($product as $k => $v) : ?>
        <div class="col s12 m12">
            <div class="card">
                <div class="card-image" style="display:flex;justify-content:center">
                    <img class="" src="/<?= $v['image'] ?>">
                </div>
                <div class="card-content">
                    <p class="card-title center-align"><?= $v['name'] ?></p>
                </div>
                <div class="card-content">
                    <p class="center-align"><?= $v['description'] ?></p>
                </div>
                <div class="card-content">
                    <p class="center-align">Some additional information</p>
                </div>
                <div class="card-content">
                    <h3 class="center-align"><?= $v['price'] ?> руб.</h3>
                </div>
                <div class="card-action">
                    <center><a href="" data-id="addToCart">Добавить в корзину</a></center>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>