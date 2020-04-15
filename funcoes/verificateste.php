<?php
    session_start();
    include_once("conexao.php");
   
   
   
   $id = $_SESSION['usuarioId'];
   $sql2 = mysqli_query($conn, "SELECT usuario.id, usuario.id_empresa FROM usuario INNER JOIN login ON usuario.id_login = login.id where usuario.id_login = '$id' ");
        $resultado2 = mysqli_fetch_array($sql2);
         $id_usuario = $resultado2['id'];
          $id_empresa = $resultado2['id_empresa'];
   
   
   $teste = mysqli_query($conn,"SELECT * FROM teste where id_usuario = '$id_usuario' AND id_empresa = '$id_empresa' ");
    $resultado3 = mysqli_fetch_array($teste);
 
    
    
//    if($resultado3['id_usuario'] === ""){
//        
//        header("Location: ../erro.php");
//        
//    }
//    
    if(mysqli_affected_rows($conn) != 0){
        
              
    
                      echo"<script language='javascript' type='text/javascript'>alert('Erro! Você já fez o teste para a empresa selecionada, verifique o código ou entre em contato com a empresa para poder efetuar o teste novamente!');window.location.href='../usuario.php'</script>";

        
        
            }else{
                header("Location: ../teste_1.php");
              
                
            }
        
            
?>

