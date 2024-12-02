<?php
class UsuarioDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
}