<?php

session_start(); 
 include_once("conexao.php");  
 
$senha = mysqli_real_escape_string($conn, $_POST['senha_nova']);
$senha = md5($senha);
$token = mysqli_real_escape_string($conn, $_POST['token']);
$sql = mysqli_query($conn,"UPDATE login SET senha = '$senha', token = '' WHERE token = '$token'");

if(mysqli_affected_rows($conn) > 0){

 echo"<script language='javascript' type='text/javascript'>alert('Senha atualizada com sucesso! ');window.location.href='../index.php'</script>";

}else{
    
  echo"<script language='javascript' type='text/javascript'>alert('Erro ao atualizar senha, tente novamente! ');window.location.href='../index.php'</script>";

}
 mysqli_close($conn); 

?>