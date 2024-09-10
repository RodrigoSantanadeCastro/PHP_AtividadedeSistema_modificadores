<?php

class Pessoa {
    public $nome;
    protected $email;
    private $cpf;
    protected $telefone;

    

    public function cadastrarEmail ($email){
        $this->email = $email;
    }
    public function cadastrarTelefone ($telefone){
        $this->telefone = $telefone;
    }

    public function cadastrarCpf ($cpf){
        $this->cpf = $cpf;
    }
    

}
?>