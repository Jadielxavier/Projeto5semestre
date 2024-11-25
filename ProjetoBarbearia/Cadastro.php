<?php
include_once('php/config.php');
 $marcado = 1;
if(isset($_POST['submit']))
{
    // print_r('Nome:'.$_POST['Nome']);
    // print_r('<br>');
    // print_r('CPF:'.$_POST['Cpf']);
    // print_r('<br>');
    // print_r('Email:'.$_POST['E_mail']);
    // print_r('<br>');
    // print_r('Senha'.$_POST['Telefone']);
    // print_r('<br>');
  $Nome = $_POST['nome'];
  $Cpf = $_POST['cpf'];
  $Email = $_POST['email'];
  $Senha = $_POST['senha'];
  
   


//  verificar se existe Cpf cadastrado no banco
  $sql = $conexao->query("SELECT * FROM CadastroCliente WHERE cpf = '$Cpf'");
  
  if (mysqli_num_rows ($sql) > 0) {

    echo "<script>alert('Conta já Cadastrado!')
    javascript:window.location='CadastroLogin.html';
    </script>"; 


   } else {
   
    $sqlINSERT = ("INSERT INTO CadastroCliente (nome,cpf,email,senha) 
    VALUES ('$Nome','$Cpf','$Email','$Senha')");

   //Check connection;
   if($conexao->connect_error)
        die("Connection failed: ".$conexao-> connect_error);
    }
    if ($conexao-> query($sqlINSERT)=== true){

    echo "<script>alert('Conta Criada com sucessco!')
    javascript:window.location='Login.html';
    </script>";    
     
    } else{
        echo "Error INSERT record: ".$conexao->error;

    }

    $conexao->close();
  }


?>

