<?php

class Cliente extends Pessoa {

    private $tipo;
    private $endereco;
    
    public function CadastrarTipo($tipo){
        $this->tipo=$tipo;

    }

    public function CadastrarEndereco($endereco){
        $this->endereco=$endereco;
    }
    

}
?>