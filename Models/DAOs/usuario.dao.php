<?php
class UsuarioDAO
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function registroUsuario($usuario)
    {
        $sql = "INSERT INTO usuarios (id, nome, email, cpf, senha) VALUES (:id, :nome, :email, :cpf, :senha)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $usuario->getId(),
            'nome' => $usuario->getNome(),
            'email' => $usuario->getEmail(),
            'cpf' => $usuario->getCPF(),
            'senha' => $usuario->getSenha()
        ]);

        $sql = "SELECT id FROM usuarios WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'email' => $usuario->getEmail()
        ]);
        $id_inserido = $stmt->fetchAll(PDO::FETCH_OBJ)[0]->id;

        $sql = "INSERT INTO telefones (id, numero, id_usuario) VALUES (:id, :num, :id_usuario)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $usuario->getTelefone()[0]->getId(),
            'num' => $usuario->getTelefone()[0]->getNum(),
            'id_usuario' => $id_inserido
        ]);

        $sql = "INSERT INTO enderecos (id, numero, rua, bairro, cidade, estado, cep, id_usuario) VALUES (:id, :num, :rua, :bairro, :cidade, :estado, :cep, :id_usuario)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $usuario->getEndereco()[0]->getId(),
            'num' => $usuario->getEndereco()[0]->getNum(),
            'rua' => $usuario->getEndereco()[0]->getRua(),
            'bairro' => $usuario->getEndereco()[0]->getBairro(),
            'cidade' => $usuario->getEndereco()[0]->getCidade(),
            'estado' => $usuario->getEndereco()[0]->getEstado(),
            'cep' => $usuario->getEndereco()[0]->getCEP(),
            'id_usuario' => $id_inserido
        ]);
    }

    public function login($usuario)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'email' => $usuario->getEmail(),
            'senha' => $usuario->getSenha()
        ]);
        if (empty($stmt->fetchAll(PDO::FETCH_OBJ))) {
            return false;
        } else {
            return true;
        }
    }

}