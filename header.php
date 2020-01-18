<?php

// Item do menu ativo
$menu = (isset($page)) ? $page : 'index';
?>

<!doctype php>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>REI MARINE</title>
</head>
<nav class="navbar shadow navbar-expand-lg navbar-light fixed-top bg-light w-100">
    <div class="container" <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="70" height="70" alt="">
        </a>
        <a class="navbar-brand" href="index.php">REI MARINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mynav collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link <?php echo ($menu == 'sobre') ? 'class="active"' : null; ?>" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($menu == 'servicos') ? 'class="active"' : null; ?>" href="servicos.php">Serviços</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php echo ($menu == 'clientes') ? 'class="active"' : null; ?>" href="clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($menu == 'contatos') ? 'class="active"' : null; ?>" href="contatos.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    <main role="main" class="">