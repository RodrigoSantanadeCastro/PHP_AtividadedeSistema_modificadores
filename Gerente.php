<?php
class Gerente extends Funcionario {

    protected $registro;
    protected $setor;

    public function MudarSetor ($setor){
        $this->setor = $setor;
    }
}
?>