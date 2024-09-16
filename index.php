<?php
require_once ('inicio.php');
require_once ('Pessoa.php');

?>

<?php
$pessoa = new Pessoa();
$nome= $_POST ['nome'] ??null ;
$email=$_POST ['email'] ??null;
$cpf=$_POST ['cpf'] ??null;
$telefone= $_POST ['telefone'] ??null;

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

        <input type="submit" value="Enviar">

       
        
    </form>
<?php
if(isset($_POST['nome'])){
    $pessoa-> CadastrarNome($nome);
    $pessoa->CadastrarTelefone($telefone);     
    $pessoa->CadastrarCpf($cpf);
    $pessoa->cadastrarEmail($email);

    $pessoa-> MostrarNome();
 }else{
    echo "ERRO";

 }
require_once ('fim.php');
?>



