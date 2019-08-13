<?php


function email($maior,$email,$telefone,$nome,$emailCandidato){
    
  
  // Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  
   
                 
                 .estilo2{
                     
                     background-color: #F32D2D;
                     font-size: 20px;
                     color: #fff;
                     padding: 10px;
                 }
  </style>
    <html>
    
          <h2>$nome</h2>
              <h4>$emailCandidato</h4>
              <h4>$telefone</h4>
             
             <h3>Este candidato é mais...</h3>
             
             <div style='background-color: #49A55E;  font-size: 20px; color: #fff; padding: 10px;'>
             
      
            <p>$maior</p><br>
            
          
            
             </div>
       
    </html>
  ";



//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = $email;
  $destino = $emailenviar;
  $assunto = "Teste DISC";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:'.$nome.'<'.$emailCandidato.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }  
    
    
    
    
}

?>