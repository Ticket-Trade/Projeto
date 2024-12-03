<?php
require_once 'header.php';
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtendo os dados do formulário
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $cpf_usuario = $_POST['cpf_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    
    // Endereço
    $num_endereco = $_POST['num_endereco'];
    $rua_endereco = $_POST['rua_endereco'];
    $bairro_endereco = $_POST['bairro_endereco'];
    $cidade_endereco = $_POST['cidade_endereco'];
    $estado_endereco = $_POST['estado_endereco'];
    $cep_endereco = $_POST['cep_endereco'];

    // Telefone
    $numero_telefone = $_POST['numero_telefone'];

    // Criando a instância de Usuario
    $usuario = new Usuario(
        0, $nome_usuario, $email_usuario, $cpf_usuario, $senha_usuario, 0, 1,
        0, $num_endereco, $rua_endereco, $bairro_endereco, $cidade_endereco, $estado_endereco, $cep_endereco,
        0, $numero_telefone
    );

    $usuarioDAO = new UsuarioDAO($pdo);

    var_dump($usuarioDAO);

    $usuarioDAO->registroUsuario($usuario);
    
    // Aqui você pode realizar outras ações como salvar os dados no banco de dados
    echo "<div class='alert alert-success mt-3'>Usuário registrado com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuário</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Registro de Usuário</h2>
    <form method="POST">
        <!-- Dados do Usuário -->
        <div class="mb-3">
            <label for="nome_usuario" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" required>
        </div>

        <div class="mb-3">
            <label for="email_usuario" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email_usuario" name="email_usuario" required>
        </div>

        <div class="mb-3">
            <label for="cpf_usuario" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf_usuario" name="cpf_usuario" required>
        </div>

        <div class="mb-3">
            <label for="senha_usuario" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" required>
        </div>

        <!-- Dados do Endereço -->
        <h4>Endereço</h4>
        <div class="mb-3">
            <label for="num_endereco" class="form-label">Número do Endereço</label>
            <input type="text" class="form-control" id="num_endereco" name="num_endereco" required>
        </div>

        <div class="mb-3">
            <label for="rua_endereco" class="form-label">Rua</label>
            <input type="text" class="form-control" id="rua_endereco" name="rua_endereco" required>
        </div>

        <div class="mb-3">
            <label for="bairro_endereco" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro_endereco" name="bairro_endereco" required>
        </div>

        <div class="mb-3">
            <label for="cidade_endereco" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade_endereco" name="cidade_endereco" required>
        </div>

        <div class="mb-3">
            <label for="estado_endereco" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado_endereco" name="estado_endereco" required>
        </div>

        <div class="mb-3">
            <label for="cep_endereco" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep_endereco" name="cep_endereco" required>
        </div>

        <!-- Dados de Telefone -->
        <h4>Telefone</h4>
        <div class="mb-3">
            <label for="numero_telefone" class="form-label">Número de Telefone</label>
            <input type="text" class="form-control" id="numero_telefone" name="numero_telefone" required>
        </div>

        <!-- Botão de Submissão -->
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
