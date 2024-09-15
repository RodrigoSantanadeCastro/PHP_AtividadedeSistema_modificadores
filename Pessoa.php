<?php

class Pessoa {
    protected $nome;
    protected $email;
    protected $cpf;
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

    public function CadastrarNome($nome){
        $this->nome = $nome;
    }

    public function MostrarNome(){
        echo $this->nome;
    }

    public function MostrarTelefone(){
        echo $this->telefone;
    }

    public function MostrarEmail(){
        echo $this->email;
    }
    

}
?>