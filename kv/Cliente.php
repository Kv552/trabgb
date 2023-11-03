<?php
class Cliente extends Conta {
    private $cpf;
    private $endereco;
    private $dataNasci;
    
    public function __construct(float $numero,float $saldo, string $nome, string $cpf, string $endereco, string $dataNasci) {
        parent::__construct($numero, $nome, $saldo);
        $this->definirCpf($cpf);
        $this->definirEndereco($endereco);
        $this->definirData($dataNasci);
    }

    public function definirCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function retornarCpf() {
        return $this->cpf;
    }
    public function definirEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function retornarEndereco() {
        return $this->endereco;
    }
    public function definirData($dataNasci) {
        $this->dataNasci = $dataNasci;
    }
    public function retornarData() {
        return $this->dataNasci;
    }
}