<?php
class Gerente extends Funcionario {

    private $registro;
    private $cpf;
    protected $setor;

    public function MudarSetor ($setor){
        $this->setor = $setor;
    }
}
?>