<?php

 
   include('conexao.php');
  
   session_start();
   

   $user_check = $_SESSION['usuarioEmail'];
   
   $ses_sql = mysqli_query($conn,"select nome from rh INNER JOIN login ON login.id = rh.id_login where login.email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nome'];
   
   if(!isset($_SESSION['usuarioEmail'])){
      header("location:index.php");
   }

?>
