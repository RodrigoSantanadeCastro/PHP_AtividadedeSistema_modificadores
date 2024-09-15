<?php
require_once ('inicio.php');
require_once ('Pessoa.php');
require_once ('Cliente.php');

?>

<?php
$cliente= new Cliente();
$nome= $_POST ['nome'] ??null ;
$email=$_POST ['email'] ??null;
$cpf=$_POST ['cpf'] ??null;
$telefone= $_POST ['telefone'] ??null;
$tipo=$_POST['tipo'] ??null;
$endereco=$_POST['endereco'] ??null;

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
        
        <label for="Endereco">Endereço</label>
        <input type="text" name=endereco value= <?=$endereco?> >

        <label for="tipo">Tipo de cliente</label>
        <input type="text" name=tipo value= <?=$tipo?> >

        <input type="submit" value="Enviar">

       
        
    </form>
<?php
if(isset($_POST['submit'])){
    $cliente->CadastrarNome($nome);
    $cliente->CadastrarTelefone($telefone);     
    $cliente->CadastrarCpf($cpf);
    $cliente->CadastrarEmail($email);
    $cliente->CadastrarTipo($tipo);
    $cliente->CadastrarEndereco($endereco);

    $cliente-> MostrarNome();
    $cliente-> MostrarEmail();
    $cliente-> MostrarTelefone();
 }else{
    $cliente->CadastrarNome($nome);
    $cliente->CadastrarTelefone($telefone);     
    $cliente->CadastrarCpf($cpf);
    $cliente->CadastrarEmail($email);
    $cliente->CadastrarTipo($tipo);
    $cliente->CadastrarEndereco($endereco);

    $cliente-> MostrarNome();
    $cliente-> MostrarEmail();
    $cliente-> MostrarTelefone();
 }
require_once ('fim.php');
?>



