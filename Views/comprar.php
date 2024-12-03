<?php
require_once 'header.php';

$eventoDAO = new EventoDAO($pdo);

$id_evento = $_GET['id'] ?? null;
$evento = $eventoDAO->buscarEvento(new Usuario($id_evento)); 

if ($id_evento && isset($eventos[$id_evento])) {
    $evento = $eventos[$id_evento];
} else {
    echo "Evento não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Compra de Evento</h2>

    <div class="row">
        <!-- Coluna para a imagem do evento -->
        <div class="col-md-6">
            <img src="<?php echo $evento['imagem_evento']; ?>" class="img-fluid rounded" alt="<?php echo $evento['nome_evento']; ?>">
        </div>

        <!-- Coluna para os detalhes e botão de compra -->
        <div class="col-md-6">
            <h3><?php echo $evento['nome_evento']; ?></h3>
            <p><strong>Detalhes:</strong> <?php echo $evento['descricao_evento']; ?></p>
            <p><strong>Preço:</strong> R$ <?php echo number_format($evento['preco_evento'], 2, ',', '.'); ?></p>
            <a href="confirmar_compra.php?id=<?php echo $id_evento; ?>" class="btn btn-success">Confirmar Compra</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
