<?php
    session_start();
    include_once("conexao.php");
    include_once("../phplot/phplot.php");
    $quadrado_mais = mysqli_real_escape_string($conn, $_POST['recebequadradomais']);
    $triangulo_mais = mysqli_real_escape_string($conn,$_POST['recebetriangulomais']);
    $musica_mais = mysqli_real_escape_string($conn,$_POST['recebemusicamais']);
    $z_mais = mysqli_real_escape_string($conn, $_POST['recebezmais']);
    
    $quadrado_menos = mysqli_real_escape_string($conn, $_POST['recebequadradomenos']);
    $triangulo_menos = mysqli_real_escape_string($conn,$_POST['recebetriangulomenos']);
    $musica_menos = mysqli_real_escape_string($conn,$_POST['recebemusicamenos']);
    $z_menos = mysqli_real_escape_string($conn, $_POST['recebezmenos']);
    
    
    $d = $z_mais - $z_menos;
    $i = $quadrado_mais - $quadrado_menos;
    $s = $triangulo_mais - $triangulo_menos;
    $c = $musica_mais - $musica_menos;
    
    
    $id = $_SESSION['usuarioId'];
    $sql2 = mysqli_query($conn, "SELECT usuario.nome, usuario.email, usuario.id, usuario.id_empresa FROM usuario INNER JOIN login ON usuario.id_login = login.id where usuario.id_login = '$id' ");
        $resultado2 = mysqli_fetch_array($sql2);
        
        $id_usuario = $resultado2['id'];
        $id_empresa = $resultado2['id_empresa'];
        $email_usuario = $resultado2['email'];
        $nome_usuario = $resultado2['nome'];
    
    
    $result_login = "INSERT INTO teste(d, i, s, c, id_usuario, id_empresa) values('$d', '$i', '$s', '$c','$id_usuario','$id_empresa')";
   $resultado_login = mysqli_query($conn, $result_login);
    
 
  
    
    if(mysqli_affected_rows($conn) != 0){
              
     
        header("Location: ../usuario.php");
        
        
            }else{
                header("Location: ../index.php");
           echo "<a href='#' class='btn btn-block btn-success disabled'>Erro.</a>";
		echo "<br/><a href='../login2.php' class='btn btn-primary'>Fazer Login</a>";    
                
            }
            
         
            
            
            
            
//            funcao mail
            
            
    $sql3 = mysqli_query($conn, "SELECT * FROM rh where id = '$id_empresa' ");
        $resultado3 = mysqli_fetch_array($sql3);
        
        $email_empresa = $resultado3['email'];
              
            
    
          $mensagem = "Teste Feito por: nome: $nome_usuario \n Email: $email_usuario \n Dominancia: '$d',Influencia: '$i' ,Estabilidade: '$s' ,Cautela: '$c'";
            
            
       $from = "carlos.tecnologo2015@gmail.com";

$to = $email_empresa;

$subject = "Teste Disc";

$message = $mensagem;

$headers = "De:". $from;

mail($to, $subject, $message, $headers);
        
            
?>


