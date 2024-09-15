<?php
require_once ('inicio.php');
require_once ('Pessoa.php');
require_once ('Funcionario.php');
require_once ('gerente.php');

?>

<?php
$gerente = new Gerente();
$nome= $_POST ['nome'] ??null ;
$email=$_POST ['email'] ??null;
$cpf=$_POST ['cpf'] ??null;
$telefone= $_POST ['telefone'] ??null;
$cep= $_POST['cep'] ??null;
$turno=$_POST['turno'] ??null;
$registro=$_POST['registro'] ??null;
$dataNasc=$_POST['dataNasc'] ??null;
$tipodecontrato=$_POST['tipodecontrato'] ??null;
$salario=$_POST['salario'] ??null;
$setor=$_POST['setor'] ??null;

?>

    <h1>Cadastre-se</h1>
    <form action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name=nome value= <?=$nome?> >

        <label for="email">E-Mail</label>
        <input type="text" name=email value= <?=$email?> >

        <label for="cpf">CPF</label>
        <input type="text" name=cpf value= <?=$cpf?> >

        <label for="telefone">Telefone</label>
        <input type="text" name=telefone value= <?=$telefone?> >

        <label for="cep">CEP</label>
        <input type="text" name=cep value= <?=$cep?> >
        

        <label for="turno">Turno</label>
        <input type="text" name=turno value= <?=$turno?> >

        <label for="registro">Registro</label>
        <input type="text" name=registro value= <?=$registro?> >


        <label for="dataNasc">Data de Nascimento</label>
        <input type="text" name=dataNasc value= <?=$dataNasc?> >

        <label for="tipodecontrato">Tipo de contrato</label>
        <input type="text" name=tipodecontrato value= <?=$tipodecontrato?> >

        <label for="salario">Salario</label>
        <input type="number" name=salalrio value= <?=$salario?> >

        <label for="setor">Setor</label>
        <input type="text" name=setor value= <?=$setor?> >



        <input type="submit" value="Enviar">

        
        
    </form>

<?php
if(isset($_POST['submit'])){
    $gerente->CadastrarNome($nome);
    $gerente->CadastrarTelefone($telefone);     
    $gerente->CadastrarCpf($cpf);
    $gerente->CadastrarEmail($email);
    $gerente->CadastrarCep($cep);
    $gerente->cadastrarTurno($turno);
    $gerente->alterarRegistro($registro);
    $gerente->alterarContrato($tipodecontrato);
    $gerente->cadastrarSalario($salario);
    $gerente->MudarSetor($setor);

    $gerente-> MostrarNome();
    $gerente-> MostrarNome();
    $gerente-> MostrarEmail();
    $gerente-> MostrarTelefone();
 }else{
    $gerente->CadastrarNome($nome);
    $gerente->CadastrarTelefone($telefone);     
    $gerente->CadastrarCpf($cpf);
    $gerente->CadastrarEmail($email);
    $gerente->CadastrarCep($cep);
    $gerente->cadastrarTurno($turno);
    $gerente->alterarRegistro($registro);
    $gerente->alterarContrato($tipodecontrato);
    $gerente->cadastrarSalario($salario);
    $gerente->MudarSetor($setor);

    $gerente-> MostrarNome();
    $gerente-> MostrarNome();
    $gerente-> MostrarEmail();
    $gerente-> MostrarTelefone();
 }


require_once ('fim.php');

?>