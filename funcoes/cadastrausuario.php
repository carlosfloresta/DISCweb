<?php
    session_start();
    include_once("conexao.php");
    $nome_usuario = mysqli_real_escape_string($conn, $_POST['nome_usuario']);
    $email_usuario = mysqli_real_escape_string($conn,$_POST['email_usuario']);
    $cnpj_usuario = mysqli_real_escape_string($conn,$_POST['cpf_usuario']);
    $senha_usuario = mysqli_real_escape_string($conn, $_POST['senha_usuario']);
    $telefone_usuario = mysqli_real_escape_string($conn,$_POST['telefone_usuario']);
    $empresa_usuario = mysqli_real_escape_string($conn,$_POST['empresa_usuario']);
   $senha_usuario = md5($senha_usuario);
    
    
    $result_login = "INSERT INTO login(email, senha, nivel) values('$email_usuario', '$senha_usuario', '1')";
   $resultado_login = mysqli_query($conn, $result_login);
    
 
  
 $id = $conn->insert_id;
    
    $result_usuario = "INSERT INTO usuario (nome, telefone, cpf,  email, senha, nivel, id_login, id_empresa) VALUES ('$nome_usuario','$telefone_usuario','$cnpj_usuario','$email_usuario','$senha_usuario','1','$id', '$empresa_usuario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
              
        $_SESSION['usuarioId']= $id; 
        $_SESSION['usuarioEmail']  = $email_usuario;
         $_SESSION['usuarioNiveisAcessoId'] = "1";
        header("Location: ../usuario.php");
        
        
            }else{
                header("Location: ../index.php");
           echo "<a href='#' class='btn btn-block btn-success disabled'>Erro.</a>";
		echo "<br/><a href='../login2.php' class='btn btn-primary'>Fazer Login</a>";    
                
            }
            
            
            
            
            
            
?>

