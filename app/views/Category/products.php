<div class="row">
    <?php foreach ($products as $k => $v) : ?>
        <?php if ($v['category'] == $cat_id) : ?>
            <div class="col s5 m5">
                <div class="card">
                    <div class="card-image" style="display:flex;justify-content:center">
                        <img class="" src="/<?= $v['image'] ?>" style="height: 150px;width:150px;">
                    </div>
                    <div class="card-content">
                        <p class="card-title center-align" style="height:80px"><?= $v['name'] ?></p>
                        <p class="center-align" style="height:50px;overflow:hidden"><?= $v['description'] ?></p>
                        <h3 class="center-align"><?= $v['price'] ?> руб.</h3>
                    </div>
                    <div class="card-action">
                        <a href="/product/view?category_id=<?= $v['category'] ?>&product_id=<?= $v['id'] ?>&product_name=<?= $v['name'] ?>" class="">Просмотреть товар</a>
                        <a href="" class="right addToCart" data-id="<?= $v['id'] ?>">Добавить в корзину</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

</div>