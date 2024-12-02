<?php

class Usuario {
    private $id_usuario = 0;
    private $nome_usuario = '';
    private $email_usuario = '';
    private $cpf_usuario = '';
    private $senha_usuario = '';
    private $telefone = [];
    private $endereco = [];


    public function __construct(
        $id_usuario = 0,
        $nome_usuario = '',
        $email_usuario = '',
        $cpf_usuario = '',
        $senha_usuario = '',
        $id_endereco = 0,
        $tipo_endereco = '',
        $rua_endereco = '',
        $bairro_endereco = '',
        $cidade_endereco = '',
        $estado_endereco = '',
        $cep_endereco = '',
        $id_telefone = 0,
        $numero_telefone = ''
    ) {
        $this->id_usuario = $id_usuario;
        $this->nome_usuario = $nome_usuario;
        $this->email_usuario = $email_usuario;
        $this->cpf_usuario = $cpf_usuario;
        $this->senha_usuario = $senha_usuario;
        $this->endereco = new Endereco($id_endereco, $tipo_endereco, $rua_endereco, $bairro_endereco, $cidade_endereco, $estado_endereco, $cep_endereco); 
        $this->telefone = new Telefone($id_telefone, $numero_telefone);
    }

    public function getId() {
        return $this->id_usuario;
    }

    public function setId($id) {
        $this->id_usuario = $id;
    }

    public function getNome() {
        return $this->nome_usuario;
    }

    public function setNome($nome) {
        $this->nome_usuario = $nome;
    }

    public function getEmail() {
        return $this->email_usuario;
    }

    public function setEmail($email) {
        $this->email_usuario = $email;
    }

    public function getCPF() {
        return $this->cpf_usuario;
    }

    public function setCPF($cpf) {
        $this->cpf_usuario = $cpf;
    }

    public function getSenha() {
        return $this->senha_usuario;
    }

    public function setSenha($senha) {
        $this->senha_usuario = $senha;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($id_endereco, $tipo_endereco, $rua_endereco, $bairro_endereco, $cidade_endereco, $estado_endereco, $cep_endereco) {
        $this->endereco[] = new Endereco($id_endereco, $tipo_endereco, $rua_endereco, $bairro_endereco, $cidade_endereco, $estado_endereco, $cep_endereco);
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($id_telefone, $numero_telefone) {
        $this->telefone[] = new Telefone($id_telefone, $numero_telefone);
    }
}