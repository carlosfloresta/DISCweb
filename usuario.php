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
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="menu">
        <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="usuario.php">Disc</a>

        <a class="botao" href="sair.php">Sair</a>
    </nav>

    <!--         <div id="particles-js"></div>-->

    <h1 style="font-family: 'Pacifico', cursive;">Bem-Vindo, <?php echo $login_session;  ?>.</h1>
    <h2>O TESTE DISC É COMPOSTO POR 28 QUADRANTES.<BR> ESCOLHA UMA OPÇÃO QUE MAIS SE PAREÇA COM VOCÊ E UMA QUE MENOS SE
        ADEQUE AO SEU PERFIL.<br>EM CASO ESPECIAL FOI FEITA UMA DEMO PARA O TCC, COMPOSTA POR 7 QUADRANTES.</h2>

    <?php
        $id = $_SESSION['usuarioId'];
        $sql2 = mysqli_query($conn, "SELECT rh.nome FROM rh INNER JOIN usuario ON usuario.id_empresa = rh.id where usuario.id_login = '$id' ");
        $resultado2 = mysqli_fetch_array($sql2)?>
    <h3>O TESTE será enviado para: <?php echo $resultado2['nome']; ?></h3>
    <h3 id="opcao">Deseja alterar?<a class="botaoinicairteste" onclick="mostraRh()">SIM</a></h3>
    <center>
        <div style="display: none" id="empresa_usuario" class="selectrh">
            <form method="POST" action="funcoes/alterarempresa.php">

                <!--             <?php $sql  = mysqli_query($conn, "select * from rh");?>
            <select name="empresa_usuario" id="empresa_usuario"><?php
              while($resultado = mysqli_fetch_array($sql)){ ?>     
                  <option value="<?=  $resultado['id'] ?>"><?php echo $resultado['nome']; ?></option>
                  <?php } ?>
    
                </select>-->

                <input style="height: 30px; margin: 10px; width: 200px;" name="empresa_usuario" id="empresa_usuario">


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
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particle-stars.js"></script>
</body>

</html>