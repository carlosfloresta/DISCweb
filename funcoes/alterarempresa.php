<?php
    session_start();
    include_once("conexao.php");
   
    $empresa_usuario = mysqli_real_escape_string($conn,$_POST['empresa_usuario']);
 
   
    $id = $_SESSION['usuarioId'];
    $result_login = "UPDATE usuario SET id_empresa = '$empresa_usuario' where id_login = '$id' ";
   $resultado_login = mysqli_query($conn, $result_login);
    
 
    
    if(mysqli_affected_rows($conn) != 0){
              
    
        header("Location: ../usuario.php");
        
        
            }else{
                header("Location: ../usuario.php");
              
                
            }
        
            
?>
