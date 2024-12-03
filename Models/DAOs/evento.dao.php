<?php
class EventoDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function buscarTodos($evento) {
        $sql = 'SELECT * FROM eventos';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function buscarEvento($evento) {
        $sql = 'SELECT * FROM eventos WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $evento->getId()
        ]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}