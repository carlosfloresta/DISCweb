<?php
    session_start(); 
    include_once("conexao.php");
   
    $nome_usuario = mysqli_real_escape_string($conn, $_POST['nome_rh']);
    $email_usuario = mysqli_real_escape_string($conn,$_POST['email_rh']);
    $cnpj_usuario = mysqli_real_escape_string($conn,$_POST['cnpj_rh']);
    $senha_usuario = mysqli_real_escape_string($conn, $_POST['senha_rh']);
    $telefone_usuario = mysqli_real_escape_string($conn,$_POST['telefone_rh']);
   $senha_usuario = md5($senha_usuario);
    
    
    $result_login = "INSERT INTO login(email, senha, nivel) values('$email_usuario', '$senha_usuario', '2')";
   $resultado_login = mysqli_query($conn, $result_login);
    
 
  
 $id = $conn->insert_id;
    
    $result_usuario = "INSERT INTO rh (nome, telefone, cnpj,  email, senha, nivel, id_login) VALUES ('$nome_usuario','$telefone_usuario','$cnpj_usuario','$email_usuario','$senha_usuario','2','$id')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
              
        $_SESSION['usuarioId']= $id; 
        $_SESSION['usuarioEmail']  = $email_usuario;
         $_SESSION['usuarioNiveisAcessoId'] = "2";
        header("Location: ../rh.php");
         
        
        
            }else{
                header("Location: ../index.php");
           echo "<a href='#' class='btn btn-block btn-success disabled'>Erro.</a>";
		echo "<br/><a href='../login2.php' class='btn btn-primary'>Fazer Login</a>";    
                
            }
            
            
?>

