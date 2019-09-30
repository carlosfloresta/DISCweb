<?php

session_start(); 
 include_once("conexao.php");  

 $email = mysqli_real_escape_string($conn, $_POST['email']);

 $sql = mysqli_query($conn,"SELECT * FROM login WHERE email = '$email'");
$resultado_sql = mysqli_fetch_assoc($sql);

if($resultado_sql){
    
    $token = md5(uniqid(rand(), true));
    
    $sql2 = mysqli_query($conn,"UPDATE login SET token = '$token' WHERE email = '$email'");
  
    
    if(mysqli_affected_rows($conn) > 0){
        
        $arquivo = "
 
    <html>
    
          <h2>Recuperação de Senha - DISC</h2>
              <h3>Por favor clique no botão para alterar a senha ou copie o link abaixo:</h3>
             
             <a href='https://disc.cf/alterasenha.php?token=$token'>Resetar Senha<a/>
               <h4>https://disc.cf/alterasenha.php?token=$token</h4>   

    </html>
  ";
        
        $assunto = "Recuperação de Senha - DISC";
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: DISC<contato@disc.cf>';
      
       $enviaremail = mail($email, $assunto, $arquivo, $headers);
        if($enviaremail){
            
                     echo"<script language='javascript' type='text/javascript'>alert('enviado com sucesso! ');window.location.href='../index.php'</script>";

        }else{
            
                  echo"<script language='javascript' type='text/javascript'>alert('erro ao enviar,tente novamente! ');window.location.href='../index.php'</script>";

            
        }

        
    }else{
        
         echo"<script language='javascript' type='text/javascript'>alert('Erro! ');window.location.href='../index.php'</script>";

        
    }
    
    
    
}else{
    
    
 echo"<script language='javascript' type='text/javascript'>alert('Erro! Email não encontrado! ');window.location.href='../index.php'</script>";

    
}

mysqli_close($conn); 


?>

