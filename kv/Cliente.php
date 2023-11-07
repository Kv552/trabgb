<?php
class Cliente {
    private string $nome;
    private string $cpf;
    private string $dataNasci;
    private Conta $conta;
    
    public function __construct($nome, $cpf, $dataNasci, $conta) {
        $this->definirNome($nome);
        $this->definirCpf($cpf);
        $this->definirData($dataNasci);
        $this->definirConta($conta);

    }

    public function definirNome(string $nome) {
        $this->nome = $nome;
    }
    public function definirCpf(string $cpf) {
        $this->cpf = $cpf;
    }
    public function definirData(string $dataNasci) {
        $this->dataNasci = $dataNasci;
    }
    public function definirConta(Conta $conta) {
        $this->conta = $conta;
    }
    public function retornarNome() {
        return $this->nome;
    }
    public function retornarCpf() {
        return $this->cpf;
    }
    public function retornarData() {
        return $this->dataNasci;
    }
    public function retornarConta() {
        return $this->conta;
    }
    

}