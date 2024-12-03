<?php
session_start();

require_once '../Models/connection.php';

require_once '../Models/Classes/usuario.class.php';
require_once '../Models/Classes/telefone.class.php';
require_once '../Models/Classes/endereco.class.php';
require_once '../Models/Classes/evento.class.php';
require_once '../Models/Classes/compra.class.php';
require_once '../Models/Classes/autorizacao.class.php';

require_once '../Models/DAOs/usuario.dao.php';
require_once '../Models/DAOs/telefone.dao.php';
require_once '../Models/DAOs/endereco.dao.php';
require_once '../Models/DAOs/evento.dao.php';
require_once '../Models/DAOs/compra.dao.php';
require_once '../Models/DAOs/autorizacao.dao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Ingressos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-4">
                <a href="index.php" class="text-white text-decoration-none">
                    <h1><i class="fas fa-ticket-alt"></i> Ticket Trade</h1>
                </a>
            </div>

            <!-- Navegação -->
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> Minha Conta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fas fa-shopping-cart"></i> Carrinho</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Script do Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>