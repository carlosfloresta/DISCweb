<?php
    include('funcoes/session.php');
       
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DISC</title>
        <link rel="stylesheet" href="css/usuario.css">

    </head>
    <body>
        
        <nav>
            
            <a class="botao" href="sair.php">Sair</a>
           
            
            
        </nav>    
        
        <h1>Bem-Vindo, <?php echo $login_session;  ?>.</h1>
        <h2>O TESTE DISC É COMPOSTO POR 28 QUADRANTES.<BR> ESCOLHA UMA OPÇÃO QUE MAIS SE PAREÇA COM VOCÊ E UMA QUE MENOS SE ADEQUE AO SEU PERFIL.</h2>
       
        <?php
        $id = $_SESSION['usuarioId'];
        $sql2 = mysqli_query($conn, "SELECT rh.nome FROM rh INNER JOIN usuario ON usuario.id_empresa = rh.id where usuario.id_login = '$id' ");
        $resultado2 = mysqli_fetch_array($sql2)?>
        <h3>RH/Psicologo(a) selecionado onde será enviado o teste: <?php echo $resultado2['nome']; ?></h3>
        <h3 id="opcao">Deseja alterar?<a class="botaoinicairteste" onclick="mostraRh()">SIM</a></h3>
    <center>
        <div style="display: none"  id="empresa_usuario" class="selectrh">
            <form method="POST" action="funcoes/alterarempresa.php">
            
             <?php $sql  = mysqli_query($conn, "select * from rh");?>
            <select name="empresa_usuario" id="empresa_usuario"><?php
              while($resultado = mysqli_fetch_array($sql)){ ?>     
                  <option value="<?=  $resultado['id'] ?>"><?php echo $resultado['nome']; ?></option>
                  <?php } ?>
    
                </select>
            
          
            <button class="botaoinicairteste" type="submit">Alterar</button>
            </form>
        </div>
        </center>
        
         <br><br><br>
         <form method="POST" action="funcoes/verificateste.php">
             <center> <button type="submit" class="botaoinicairteste" id="iniciar">INICIAR TESTE</button></center>
         </form>
    <script>
    
    function mostraRh() {

            document.getElementById("empresa_usuario").style.display = 'block';
            document.getElementById("opcao").style.display = 'none';

        }
    
    
    </script>
    </body>
</html>