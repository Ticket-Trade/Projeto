<?php
class CompraIngresso {
    private $id_compra = 0;
    private DateTime $data_compra;
    private $quantidade = 0;
    private Usuario $usuario;
    private Evento $evento;
    
    public function __construct($id, Usuario $usuario, Evento $evento, DateTime $dataCompra, int $quantidade) {
        $this->id_compra = $id;
        $this->quantidade = $quantidade;
        $this->data_compra = $dataCompra;
        $this->usuario = $usuario;
        $this->evento = $evento;
    }

    public function getId(): int {
        return $this->id_compra;
    }

    public function setId($id) {
        $this->id_compra = $id;
    }
    
    public function getUsuario(): Usuario {
        return $this->usuario;
    }
    public function setUsuario(Usuario $usuario): void {
        $this->usuario = $usuario;
    }

    public function getEvento(): Evento {
        return $this->evento;
    }
    
    public function setEvento(Evento $evento): void {
        $this->evento = $evento;
    }

    public function getDataCompra(): DateTime {
        return $this->data_compra;
    }
    
    public function setDataCompra(DateTime $data): void {
        $this->data_compra = $data;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }
    
    public function setQuantidade(int $quantidade): void {
        $this->quantidade = $quantidade;
    }
}