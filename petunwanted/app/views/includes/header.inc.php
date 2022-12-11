<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>PetUnwanted</title>
    <link href="<?= URLROOT; ?>/css/bs/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="<?= URLROOT; ?>/css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/fa/css/fontawesome.min.css">
    <style>
        .rojo {
            color: black;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #a62bff">
            <div class="container-fluid">
                <div class="collapse navbar-collapse " id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= URLROOT ?>"><i
                                    class="fa-solid fa-otter" style="color: white;"></i></a>
                        </li>
                        <li class=" nav-item">

                            <a class="nav-link" href="<?= URLROOT ?>/clientes/index/10/1"><i class="fa-solid fa-paw"
                                    style="color: blackgray;"> Mascotas</i></a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="<?= URLROOT ?>/productos/index/"><i class="fa-brands fa-shopify"
                                    style="color: gray;"> Productos</i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-2 d-flex">
                        <!-- esta parte se va a modificar -->
                        <?php if (estaLogueado()) { ?>
                        <li class="nav-item">
                            <span class="nav-link">
                                <?= $_SESSION['usuario_nombre'] ?>
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT; ?>/usuarios/logout">LogOut</a>
                        </li>
                        <li class=" nav-item">

                            <a class="nav-link" href="<?= URLROOT ?>/clientes/index/10/1"><i
                                    class="fa-sharp fa-solid fa-cart-shopping" style="color: blackgray;">Carrito</i></a>
                        </li>

                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT; ?>/usuarios/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT; ?>/usuarios/registro">Sign up</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">