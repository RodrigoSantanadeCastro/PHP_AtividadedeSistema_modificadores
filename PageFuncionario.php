<?php
require_once ('inicio.php');
require_once ('Funcionario.php');
?>

<?php
$funcionario = new Funcionario();
$nome= $_POST ['nome'] ??null ;
$email=$_POST ['email'] ??null;
$cpf=$_POST ['cpf'] ??null;
$telefone=$_POST ['telefone'] ??null;
$cep=$_$POST['cep'] ??null;
$cargo=$_$POST['cargo'] ??null;
$turno=$_$POST['turno'] ??null;
$registro=$_$POST['registro'] ??null;
$dataNasc=$_$POST['dataNasc'] ??null;
$tipodecontrato=$_$POST['tipodecontrato'] ??null;
$salario=$_$POST['salario'] ??null;

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

        <?php
        echo "O cadastro $nome $email $cpf $telefone"
        ?>
        
    </form>






<?php
require_once ('fim.php');

?>