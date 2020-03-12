<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/public/js/main.js"></script>
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
    </style>
    <title><?= $title ?></title>
</head>

<body>
    <nav>
        <div class="nav-wrapper blue-grey darken-3">
            <a href="/" class="brand-logo">e-shop</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="badges.html"><i class="material-icons">shopping_cart</i></a></li>
                <li><a href="collapsible.html">Войти</a></li>
            </ul>
        </div>
    </nav>
    <?= $content ?>
    <footer class="page-footer blue-grey darken-3">
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
</body>

</html>