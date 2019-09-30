<?php
session_start();
 include_once("funcoes/conexao.php");
$token =  filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING);


$sql = mysqli_query($conn,"Select * from login where token = '$token'");
$total = mysqli_num_rows($sql);




if($token == null){
    
  header("Location: index.php");
    
}else

if($total === 0){
    
  header("Location: index.php");
    
}

mysqli_close($conn); 
?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DISC</title>
        <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/particule.css">
    </head>
    <body>
        
         <nav class="menu">
            
            <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="index.php">Disc</a>
            
           
        
<!--              <a class="botao" onclick="mostraCadastro()">Conheça nosso Sistema</a>-->
        </nav>
        
        <nav class="menumobiletopo">
            
            <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="index.php">Disc</a>
            
             <a class="botaoDuvida">?</a>
  
        </nav>
        
        <nav class="menumobile" id="menumobile">
            
     
        </nav>
        
        <div id="particles-js"></div>
        
        
           <!--      form esqueceu senha  -->
        <div id="recuperasenha">
                <h1>Trocar senha:</h1>
                
                 <div id="alerta"></div>
                <center> <form class="login"   method="POST" action="funcoes/alterasenha.php">
            
            <br>
            <div class="border">
            <div>
                <input style="display: none" type="password" name="senha_nova" required id="senha_nova">
                <label>Nova senha:</label>
                <input type="password" name="senha" required id="senha">
                <label>Confirme:</label>
                 <input type="password" name="senha2" required id="senha2">
                 
                 <input type="text" name="token" required id="token" value="<?php echo $token; ?>" style="display: none;">
            </div>
           
            <br>
           
          
            <button class="botaoLogin2" id="cadastrar" type="submit" onclick="confirmaSenha()">ALTERAR SENHA</button>
            <a class="botaoLogin3" id="cancelar"  href="index.php">CANCELAR</a>
            </div>
            
 
        </form> </center>
                
                 
                </div>
        
        
      
        <script>
        
        function confirmaSenha(){
       var senha1 = document.getElementById("senha").value;
        var senha2 = document.getElementById("senha2").value;
        
      
         
        if(senha1 === senha2){
            
           document.getElementById("senha_nova").value = senha1;
            
        }else{
            
            document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.color = '#fff';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "As senhas digitadas não se coincidem";
            document.getElementById("recuperasenha").scrollTo(0, 0);
           
        }

        }
        
        
        </script>
        
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 

    <script src='js/index.js' ></script>
    
    <script src='js/particle.js' ></script>
        
    </body>
</html>
