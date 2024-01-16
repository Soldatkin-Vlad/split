<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Club Split</title>
</head>
<body>
<header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">CC Split</span>
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/index.php" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="/about.php" class="nav-link px-2">Брони</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <a href="auth.php" class="btn btn-primary">Войти</a>
    </div>
</header>
<div class="container mt-5">
    <h3 class="mb-3">Управление ПК</h3>
    <h3 class="text-center mb-5"> VIP-зал</h3>
    <div class="d-flex flex-wrap">
        <?php for ($i = 0; $i < 6; $i++):?>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">PC <?php  echo ($i + 1) ?></h4>
                </div>
                <div class="card-body">
                    <div class="feature col">
                        <img src="img/pc.png" class="img-thumbnail">
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <h3 class="text-center mb-5 mt-3"> Обычный зал</h3>
    <div class="d-flex flex-wrap">
        <?php for ($i = 0; $i < 20; $i++):?>
        <div class="card1 mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">PC <?php  echo ($i + 1) ?></h4>
            </div>
            <div class="card-body">
                <div class="feature col">
                    <img src="img/pc.png" class="img-thumbnail">
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>

<?php require "blocks/footer.php"?>

</body>
</html>