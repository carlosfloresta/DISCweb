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
        
        <h1>DESCRIÇÃO DO TESTE</h1>
        <h2>O TESTE DISC É COMPOSTO POR 28 QUADRANTES.<BR> ESCOLHA UMA OPÇÃO QUE MAIS SE PAREÇA COM VOCÊ E UMA QUE MENOS SE ADEQUE AO SEU PERFIL.</h2>
       
        <?php
        $id = $_SESSION['usuarioId'];
        $sql2 = mysqli_query($conn, "SELECT rh.nome FROM rh INNER JOIN usuario ON usuario.id_empresa = rh.id INNER JOIN login ON usuario.id_login = login.id where login.id = '$id' ");
        $resultado2 = mysqli_fetch_array($sql2)?>
        <h3>RH/Psicologo(a) selecionado onde será enviado o teste: <?php echo $resultado2['nome']; ?></h3>
        <h3 id="opcao">Deseja alterar?<a class="botaoinicairteste" onclick="mostraRh()">SIM</a></h3>
    <center>
        <div style="display: none"  id="empresa_usuario" class="selectrh">
            
             <?php $sql  = mysqli_query($conn, "select * from rh");?>
            <select name="empresa_usuario"><?php
              while($resultado = mysqli_fetch_array($sql)){ ?>     
                  <option value="<?=  $resultado['id'] ?>"><?php echo $resultado['nome']; ?></option>
                  <?php } ?>
    
                </select>
            
            <a class="botaoinicairteste">Alterar</a>
            
        </div>
        </center>
        
         <br><br><br>
    <center> <a class="botaoinicairteste">INICIAR TESTE</a></center>





    
    <script>
    
    function mostraRh() {

            document.getElementById("empresa_usuario").style.display = 'block';
            document.getElementById("opcao").style.display = 'none';

        }
    
    
    </script>





    </body>
</html>