<?php
class Evento {
    private $id_evento = 0;
    private $nome_evento = '';
    private $local_evento = '';
    private DateTime $data_evento;
    private $preco_evento = 0;

    public function __construct(
        $id_evento = 0,
        $nome_evento = '',
        $local_evento = '',
        DateTime $data_evento,
        $preco_evento = 0
    ) {
        $this->id_evento = $id_evento;
        $this->nome_evento = $nome_evento;
        $this->local_evento = $local_evento;
        $this->data_evento = $data_evento;
        $this->preco_evento = $preco_evento;
    }

    public function getId() {
        return $this->id_evento;
    }

    public function setId($id) {
        $this->id_evento = $id;
    }

    public function getNome() {
        return $this->nome_evento;
    }

    public function setNome($nome) {
        $this->nome_evento = $nome;
    }

    public function getLocal() {
        return $this->local_evento;
    }

    public function setLocal($local) {
        $this->local_evento = $local;
    }

    public function getData() {
        return $this->data_evento;
    }

    public function setData(DateTime $data) {
        $this->data_evento = $data;
    }

    public function getPreco() {
        return $this->preco_evento;
    }

    public function setPreco($preco) {
        $this->preco_evento = $preco;
    }
}