<?php
//session_start();

            

function email($maior,$email,$telefone,$nome,$emailCandidato,$segundoMaior,$corfundo,$corfundo2,$d,$i,$s,$c){
//    $d =  $_SESSION['d'];
//               $i =    $_SESSION['i'];
//                $s =   $_SESSION['s'];
//                $c =   $_SESSION['c'];
  
  // Compo E-mail
  $arquivo = "
 
    <html>
    
          <h2>Nome: $nome</h2>
              <h4>Email: $emailCandidato</h4>
              <h4>Telefone: $telefone</h4>
             
             <h3>Este candidato é mais...</h3>
             
             <div style='background-color: $corfundo;  font-size: 20px; color: #fff; padding: 10px;'>
             
      
            <p>$maior</p><br>
            
          
            
             </div>
             
                <h3>Com ascendente em...</h3>
            <div style='background-color: $corfundo2;  font-size: 20px; color: #fff; padding: 10px;'>
             
      
            <p>$segundoMaior</p><br>
            
          
            
             </div>    
             
               <img style='width:100%' src='https://carlos.cf/DISCweb/funcoes/grafico.php?d=$d&i=$i&s=$s&c=$c'>
       
    </html>
  ";



//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = $email;
  $destino = $emailenviar;
  $assunto = "Teste DISC";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From:'.$nome.'<'.$emailCandidato.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
      
      
             echo"<script language='javascript' type='text/javascript'>alert('Teste enviado, obrigado!');</script>";
 
  
//  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
//  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
      
       echo"<script language='javascript' type='text/javascript'>alert('Erro ao enviar email, tente novamente!');</script>";
  }
//  $mgm = "ERRO AO ENVIAR E-MAIL!";
//  echo "";
//  }  
    
    
    
    
}

?>