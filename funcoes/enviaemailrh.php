<?php
session_start();
include_once("email.php");


 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 
 $nome_usuario = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
  $mensagem = $_POST['mensagem'];
   $mensagem2 = $_POST['mensagem2'];
    $telefone_usuario = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
      $email_usuario = filter_input(INPUT_POST, 'emailusuario', FILTER_SANITIZE_STRING);
        $corfundo = filter_input(INPUT_POST, 'cor1', FILTER_SANITIZE_STRING);
         $corfundo2 = filter_input(INPUT_POST, 'cor2', FILTER_SANITIZE_STRING);
         
           $d = filter_input(INPUT_POST, 'd', FILTER_SANITIZE_STRING);
           $i = filter_input(INPUT_POST, 'i', FILTER_SANITIZE_STRING);
           $s = filter_input(INPUT_POST, 's', FILTER_SANITIZE_STRING);
           $c = filter_input(INPUT_POST, 'c', FILTER_SANITIZE_STRING);

email($mensagem,$email,$telefone_usuario,$nome_usuario,$email_usuario,$mensagem2,$corfundo,$corfundo2,$d,$i,$s,$c);


        echo"<script language='javascript' type='text/javascript'>window.location.href='../rh.php'</script>";
