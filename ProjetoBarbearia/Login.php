<?php
include('php/config.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: logins.html');
	exit();
}
 
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select id,email from CadastroCliente where email = '{$email}' and senha =  ('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

// echo$row;exit;
 
if($row == 1) {
	echo "<script>alert('Seja bem vindo!')
   javascript:window.location='FormAgenda.html';
   </script>"; 
	exit();
} else {
    
   echo "<script>alert('Usuario e senha invalido!')
   javascript:window.location='Login.html';
   </script>"; 
        
	exit();
}
?>