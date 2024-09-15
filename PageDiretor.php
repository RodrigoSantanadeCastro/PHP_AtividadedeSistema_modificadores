<?php
require_once ('inicio.php');
require_once ('Pessoa.php');
require_once ('Funcionario.php');
require_once ('Diretor.php');
?>

<?php
$diretor= new Diretor();
$nome= $_POST ['nome'] ??null ;
$email=$_POST ['email'] ??null;
$cpf=$_POST ['cpf'] ??null;
$telefone=$_POST ['telefone'] ??null;
$cep=$_POST['cep'] ??null;
$turno=$_POST['turno'] ??null;
$registro=$_POST['registro'] ??null;
$dataNasc=$_POST['dataNasc'] ??null;
$tipodecontrato=$_POST['tipodecontrato'] ??null;
$salario=$_POST['salario'] ??null;


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

        



        <input type="submit" value="Enviar">

        
        
    </form>

<?php
if(isset($_POST['submit'])){
    $diretor->CadastrarNome($nome);
    $diretor->CadastrarTelefone($telefone);     
    $diretor->CadastrarCpf($cpf);
    $diretor->CadastrarEmail($email);
    $diretor->CadastrarCep($cep);
    $diretor->cadastrarTurno($turno);
    $diretor->alterarRegistro($registro);
    $diretor->alterarContrato($tipodecontrato);
    $diretor->cadastrarSalario($salario);
    

    $diretor-> MostrarNome();
    $diretor-> MostrarNome();
    $diretor-> MostrarEmail();
    $diretor-> MostrarTelefone();
 }else{
    $diretor->CadastrarNome($nome);
    $diretor->CadastrarTelefone($telefone);     
    $diretor->CadastrarCpf($cpf);
    $diretor->CadastrarEmail($email);
    $diretor->CadastrarCep($cep);
    $diretor->cadastrarTurno($turno);
    $diretor->alterarRegistro($registro);
    $diretor->alterarContrato($tipodecontrato);
    $diretor->cadastrarSalario($salario);
    

    $diretor-> MostrarNome();
    $diretor-> MostrarNome();
    $diretor-> MostrarEmail();
    $diretor-> MostrarTelefone();
 }


require_once ('fim.php');

?>