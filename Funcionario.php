<?php

class Funcionario extends Pessoa {
    protected $cep;
    private $cargo;
    protected $turno;
    protected $registro;
    protected $dataNasc;
    protected $tipodecontrato;
    protected $salario;
    

    public function cadastrarCep ($cep){
        $this->cep = $cep;
    }

    public function cadastrarCargo ($cargo){
        $this->cargo = $cargo;
    }

    public function cadastrarTurno ($turno){
        $this->turno = $turno;
    }

    public function alterarRegistro ($registro){
        $this->registro = $registro;
    }

    public function cadastrarNascimento ($dataNasc){
        $this->dataNasc= $dataNasc;
    }

    public function alterarContrato ($tipodecontrato){
        $this->tipodecontrato = $tipodecontrato;
    }

    public function cadastrarSalario ($salario){
        $this->salario = $salario;
    }
    

    

}
?>