<?php
require_once 'header.php';

$eventoDAO = new EventoDAO($pdo);
$eventos = $eventoDAO->buscarTodos(new Evento(0, '', '', new DateTime(), 0));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Disponíveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Eventos Disponíveis para Compra</h2>

    <div class="row">
        <?php foreach ($eventos as $evento): ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?php echo $evento->imagem; ?>" class="card-img-top" alt="<?php echo $evento->nome; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $evento->nome; ?></h5>
                        <p class="card-text"><strong>Preço:</strong> R$ <?php echo number_format($evento->preco, 2, ',', '.'); ?></p>
                        <a href="comprar.php?id=<?php echo $evento->id; ?>" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
