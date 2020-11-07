<?php
    session_start();
    include_once("conexao.php");
   
    $codigo_rh = mysqli_real_escape_string($conn,$_POST['empresa_usuario']);
    $pegaCodigo = mysqli_query($conn, "SELECT * FROM rh WHERE codigo_acesso = '$codigo_rh'");
    $resultado4 = mysqli_fetch_assoc($pegaCodigo);
     if (isset($resultado4)) {
    $empresa_usuario = $resultado4["id"];
    $response["nomeempresa"] = $resultado4["nome"];
    $id = $_SESSION['usuarioId'];
    $result_login = "UPDATE usuario SET id_empresa = '$empresa_usuario' where id_login = '$id' ";
   $resultado_login = mysqli_query($conn, $result_login);
    if(mysqli_affected_rows($conn) != 0){
              header("Location: ../usuario.php");

            }else{
              
               echo"<script language='javascript' type='text/javascript'>alert('Erro ao alterar RH/Psicologo(a)');window.location.href='../usuario.php'</script>";
                
            }
            
     }else{
         
    echo"<script language='javascript' type='text/javascript'>alert('Código digitado de RH/Psicólogo não existe em nosso sistema!');window.location.href='../usuario.php'</script>";
 
     }
         
?>