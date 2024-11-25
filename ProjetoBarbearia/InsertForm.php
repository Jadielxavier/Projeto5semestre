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
    // print_r('Telefone'.$_POST['Telefone']);
    // print_r('<br>');
    // print_r('Tipo de Servico'.$_POST['Tipo_Servico']);
    // print_r('<br>');
    // print_r('Data e Horario:'.$_POST['Data_Horario']);

  $Nome = $_POST['Nome'];
  $Cpf = $_POST['Cpf'];
  $Email = $_POST['E_mail'];
  $Telefone = $_POST['Telefone'];
  $Tipo_Servico = $_POST['Tipo_Servico'];
  $Data_Horario = $_POST['Data_Horario'];
   


//  verificar se existe Cpf cadastrado no banco
  $sql = $conexao->query("SELECT * FROM Agenda WHERE Cpf = '$Cpf'");
  
  if (mysqli_num_rows ($sql) > 0) {

    echo "<script>alert('CPF já consta Cadastrado!')
    javascript:window.location='FormAgenda.html';
    </script>"; 




  } else 
    
  //verificar se existe Data e horario iguais já cadastrado no banco
   
  $sql = $conexao->query(" SELECT * FROM Agenda  WHERE Data_Horario = '$Data_Horario'");
   if(mysqli_num_rows($sql)> 0) {
   echo "<script>alert('Data e Horario já consta reservado!')
   javascript:window.location='FormAgenda.html';
   </script>"; 

   }else{
   
    $sqlINSERT = ("INSERT INTO Agenda (Nome,Cpf,Telefone,Tipo_Servico,Data_Horario) 
    VALUES ('$Nome','$Cpf','$Telefone','$Tipo_Servico','$Data_Horario')");

   //Check connection;
   if($conexao->connect_error)
        die("Connection failed: ".$conexao-> connect_error);
    }
    if ($conexao-> query($sqlINSERT)=== true){

    echo "<script>alert('Agendado com sucesso!')
    javascript:window.location='FormAgenda.html';
    </script>";    
     
    } else{
        echo "Error INSERT record: ".$conexao->error;

    }

    $conexao->close();
  }


?>

