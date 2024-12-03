<?php
class AutenticacaoIngresso {
    private int $id_aut;
    private DateTime $data_autenticacao;
    private bool $status;
    private CompraIngresso $compra;

    public function __construct($id, CompraIngresso $compra, DateTime $data_autenticacao, $status) {
        $this->id = $id;
        $this->compra = $compra;
        $this->data_autenticacao = $data_autenticacao;
        $this->status = $status;
    }

    public function getId(): int {
        return $this->id_aut;
    }

    public function setId($id) {
        $this->id_aut = $id;
    }

    public function getCompra(): CompraIngresso {
        return $this->compra;
    }

    public function setCompra(CompraIngresso $compra): void {
        $this->compra = $compra;
    }

    public function getDataAutenticacao(): DateTime {
        return $this->data_autenticacao;
    }

    public function setDataAutenticacao(DateTime $data): void {
        $this->data_autenticacao = $data;
    }

    public function getStatus(): bool {
        return $this->status;
    }

    public function setStatus(bool $status): void {
        $this->status = $status;
    }
}
