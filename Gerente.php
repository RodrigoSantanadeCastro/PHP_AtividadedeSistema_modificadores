<?php
class Gerente extends Funcionario {

    
    protected $setor;

    public function MudarSetor ($setor){
        $this->setor = $setor;
    }

   
}
?>