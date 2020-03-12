<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .breadcrumb:before {
            color: #000;
            line-height: 28px;
        }

        #shoppingCart {
            position: relative;
            padding-right: 38px;
        }

        .productsCount {
            color: #fff;
            position: absolute;
            top: 0;
            right: 0;
            display: inline-block;
            margin-left: 10px;
            margin-right: 15px;
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>
    <nav>
        <div class="nav-wrapper blue accent-1">
            <a href="/" class="brand-logo">e-shop</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/cart/view" id="shoppingCart" class="modal-trigger"><i class="material-icons">shopping_cart</i>
                    <span class="productsCount"></span>    
                </a></li>
                <?php if (!empty($_SESSION['user_id'])) : ?>
                    <li><a href="" class="tooltipped user" data-position="bottom"><i class="material-icons">android</i></a></li>
                    <li><a href="/account/logout">Выйти</a></li>
                <?php else : ?>
                    <li><a href="/account/login">Войти</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="col s12 ">
        <?php if ($breadcrumbs) : ?>
            <?php foreach ($breadcrumbs as $k => $v) : ?>
                <?php if ($v) : ?>
                    <a href="<?= $v ?>" class="breadcrumb black-text text-darken-2" style="text-decoration: underline"><?= $k ?></a>
                <?php else : ?>
                    <span class="breadcrumb black-text text-darken-2"><?= $k ?></span>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?= $content ?>
    <footer class="page-footer blue accent-1">
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/public/js/main.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var userName = "<?php if ($_SESSION['user_name']) echo $_SESSION['user_name'] ?>";
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems, {
                html: userName
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });
    </script>
</body>

</html>