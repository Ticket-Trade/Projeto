<?php
class AutorizacaoDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
}