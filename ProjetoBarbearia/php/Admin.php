<?php

include('config.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: logins.html');
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select id,usuario from LoginADM where usuario = '{$usuario}' and senha =  ('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

// echo$row;exit;
 
if($row == 1) {
	echo "<script>alert('Seja bem vindo!')
   javascript:window.location='tabela.php';
   </script>"; 
	exit();
} else {
    
   echo "<script>alert('Usuario e senha invalido!')
   javascript:window.location='Login.html';
   </script>"; 
        
	exit();
}
?>

