<?php
class EventoDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
}