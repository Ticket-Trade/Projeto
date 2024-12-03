<?php
require_once 'header.php';

if ($_POST) {
    $usuarioDAO = new UsuarioDAO($pdo);
    $loginCorreto = $usuarioDAO->login(new Usuario(email_usuario: $_POST['email_usuario'], senha_usuario: $_POST['senha_usuario']));

    if (!$loginCorreto) {
        $erro = 'Informações incorretas';
    } else {
        header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Login</h2>
    <?php if (isset($erro)) { echo "<div class='alert alert-danger'>$erro</div>"; } ?>
    <form method="POST">
        <div class="mb-3">
            <label for="email_usuario" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email_usuario" name="email_usuario" required>
        </div>

        <div class="mb-3">
            <label for="senha_usuario" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" required>
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
