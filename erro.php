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
            <a class="botao"><?php echo "Email: ". $_SESSION['usuarioEmail'];  ?></a>
            
            
        </nav>    
        
        <h1>ERRO</h1>
        <h2> </h2>
       
        <?php
        $id = $_SESSION['usuarioId'];
        $sql2 = mysqli_query($conn, "SELECT rh.nome FROM rh INNER JOIN usuario ON usuario.id_empresa = rh.id where usuario.id_login = '$id' ");
        $resultado2 = mysqli_fetch_array($sql2)?>
        <h2>Você já fez o teste para <?php echo $resultado2['nome']; ?></h2>
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
         

    <script>
    
    function mostraRh() {

            document.getElementById("empresa_usuario").style.display = 'block';
            document.getElementById("opcao").style.display = 'none';

        }
    
    
    </script>
    </body>
</html>

