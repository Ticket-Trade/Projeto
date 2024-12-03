<?php
class TelefoneDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
}