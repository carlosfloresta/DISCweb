<?php
//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
session_start();
include_once("funcoes/conexao.php");

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DISC</title>
        <link rel="stylesheet" href="css/index.css">

    </head>
    <body>


        


        <nav class="menu">
            
            
            <a class="botao"  onclick="mostraLogin()">Login</a>
            <a class="botao" onclick="mostraCadastro()">Cadastrar</a>
            <a class="botao" href="index.php">Home</a>
        </nav>


        <div id="disc" class="scrollDisc">
           
<h1>Avaliação Comportamental</h1>
<br>

        <div class="disc" >
            
            <h2 >DISC</h2>

            <div class="discmouse">
                <a class="dominancia" onclick="mostraDominancia()" >D<br>o<br>m<br>i<br>n<br>â<br>n<br>c<br>i<br>a</a>
                <a class="influencia" onclick="mostraInfluencia()">Influência</a>
                <a class="estabilidade" onclick="mostraEstabilidade()">E<br>s<br>t<br>a<br>b<br>i<br>l<br>i<br>d<br>a<br>d<br>e</a>
                <a class="cautela"onclick="mostraCautela()">Cautela</a>
            </div>
        </div>
</div>

        <div class="modaldominancia" id="modaldominancia">
            <div class="scrollop" >
            <br><br>
            <a class="fechar" id="fechar" onclick="fecharDominancia()">X</a> 
            <br><br>
            <h1 class="titulo">Dominância</h1>
            <p>Frase: “Eu sei o que eu quero”<br>

                São pessoas que possuem mais facilidade em lidar com desafios, pois são determinadas, exigentes, ousadas e assertivas. Por outro lado, essas pessoas não são muito atenciosas com os sentimentos e necessidades dos outros, podendo se tornar egoístas.</p>
            </div>
        </div>

        <div class="modalinfluencia" id="modalinfluencia">
            <div class="scrollop" >
            <br><br>
            <a class="fechar" id="fechar" onclick="fecharInfluencia()">X</a>
            <br><br>
            <h1 class="titulo">Influência</h1>
            <p>Frase: “Juntos somos mais fortes”<br>

                São pessoas mais emocionais e que possuem grande habilidade em influenciar pessoas. São animadas, entusiasmadas, extrovertidas e motivadoras. Sabem persuadir, se comunicar e manter o otimismo. Entretanto, essas pessoas constantemente iniciam projetos e não os terminam, e seu entusiasmo pode parecer superficialidade para os outros.
            </p>
            </div>
        </div>

        <div class="modalestabilidade" id="modalestabilidade">
            <div class="scrollop" >
            <br><br>
            <a class="fechar" id="fechar" onclick="fecharEstabilidade()">X</a>
            <br><br>
            <h1 class="titulo">Estabilidade</h1>
            <p>Frase: “Seria melhor uma abordagem mais calma”<br>

                São pessoas que lidam melhor com rotinas e padrões. São paciêncientes, tranquilas, confiáveis, leais, persistentes e gentis. Por outro lado, a estabilidade muitas vezes é acompanhada pelo medo das mudanças e uma grande falta de iniciativa. Pessoas com essa tendência de comportamento possuem dificuldade em lidar com conflitos.
            </p>
            </div>
        </div>

        <div class="modalcautela" id="modalcautela">
            <div class="scrollop" >
            <br><br>
            <a class="fechar" id="fechar" onclick="fecharCautela()">X</a> 
            <br><br>
            <h1 class="titulo">Cautela</h1>
            <p>Frase: “Eu gosto de fazer as coisas do jeito certo”<br>

                São pessoas que possuem uma maior facilidade em lidar com regras e processos. São metódicas, analíticas, técnicas e determinadas. Elas seguem ordens e normas, e realizam suas tarefas com um cuidado exemplar. Por serem muito perfeccionistas, tendem a se perder em detalhes e são extremamente críticas — tanto com elas mesmas, quanto com as outras pessoas.
            </p>
            </div>
        </div>


        <!--      form login  -->
        <div id="login" style="display: none">
                <h1>Login</h1>
        <form class="login"   method="POST" action="funcoes/validalogin.php">
            
            <div class="links"><a href="index.php" style="text-decoration: none">Home</a><span> > </span><a>Login</a> </div> 
            <br><br>
            <div>
                <label>Email:</label>
                <input type="email" name="email" required id="email">
            </div>
            <br>
            <div>
                <label>Senha:</label>
                <input type="password" name="senha" required id="senha">
            </div>
            <br>
            <button class="botaoLogin" type="submit">Login</button>
            <a style="font-size: 15px" >Esqueceu a senha?</a>

        </form> 
                </div>


        <?php
        //Recuperando o valor da variável global, os erro de login.
        if (isset($_SESSION['loginErro'])) {
            ?>
            
            <div class="modalalert" style="display: block;" id="modalalert" ><div class="content"><div class="scroll">
                    <center>
                        <img src="img/alert.gif">
                        <h2 style="color: #282828; font-family: arial;">Oops...</h2>
                        <h3 style="color: #282828; font-family: arial;">Email ou senha Incorretos</h3>
                        <a onclick="fecharAlert()">OK</a>

                    </center></div> </div><?php unset($_SESSION['loginErro']); ?>




           
            </div>
            <?php
            unset($_SESSION['loginErro']);
        }
        ?>


        <?php
        //Recuperando o valor da variável global, os erro de login.
        if (isset($_SESSION['logindeslogado'])) {
            ?>
            <div class="modalalert" style="display: block;" id="modalalert" ><div class="content">
                    <center>
                        <img src="img/alert.gif">
                        <h2 style="color: #282828; font-family: arial;">Saiu...</h2>
                        <h3 style="color: #282828; font-family: arial;">Deslogado com sucesso</h3>
                        <a onclick="fecharAlert()">OK</a>

                    </center></div><?php unset($_SESSION['logindeslogado']); ?>

            </div>
    <?php
    unset($_SESSION['logindeslogado']);
}
?>


        <!--      form login  -->      



        <!--        seleção de cadastro-->
        <div id="escolhaCadastro" style="display: none">
            <h1>Cadastrar</h1>
        
        <div class="escolhacadastro" >
            <div class="links"><a href="index.php" style="text-decoration: none">Home</a><span> > </span><a>Cadastrar</a> </div> 
            <br><br>

            <a class="opcao" onclick="mostraUsuario()">Usuário a ser Avaliado</a>


            <a class="opcao" onclick="mostraRh()">RH/Psicólogo(a)</a>
        </div>

    </div>
    <!--        seleção de cadastro-->  

    <!--    form usuario-->

    <div class="scroll" id="usuario" style="display: none">
        <h1>Usuário a ser Avaliado</h1>
        <form class="usuario"  method="POST" action="funcoes/cadastrausuario.php">
            <div class="links"><a href="index.php" style="text-decoration: none">Home</a><span> > </span><a onclick="mostraCadastro()">Cadastrar</a> <span> > </span><a>Usuário a ser Avaliado</a> </div> 
            <br><br>
            <div>
                <label>Nome:</label>
                <input type="text" name="nome_usuario" required id="nome_usuario">

                <label>CPF:</label>
                <input type="number" name="cpf_usuario" required id="cpf_usuario">

            </div>
            <br>
            <div>
                <label>Telefone:</label>
                <input type="tel" name="telefone_usuario" required id="telefone_usuario">

                <label>Selecione a empresa:</label>
                
                  
                    <?php $sql  = mysqli_query($conn, "select * from rh");?>
            <select name="empresa_usuario" id="empresa_usuario"><?php
              while($resultado = mysqli_fetch_array($sql)){ ?>     
                  <option value="<?=  $resultado['id'] ?>"><?php echo $resultado['nome']; ?></option>
                  <?php } ?>
    
                </select>

            </div>
            <br>
            <div>
                <label>Email:</label>
                <input type="email" name="email_usuario" required id="email_usuario">

                <label>Senha:</label>
                <input type="password" name="senha_usuario" required id="senha_usuario">
            </div>
            <br>
            <a class="botaoLogin"  href="index.php">Cancelar</a>
            <button class="botaoLogin"  type="submit">Cadastrar</button>
             <br>   
<br>
<br>
        </form>

    </div> 


    <!--    form usuario-->

    <!--    form rh-->

    <div class="scroll" id="rh" style="display: none" >
        <h1>RH/Psicólogo(a)</h1>
        <form class="rh" method="POST" action="funcoes/cadastrarh.php">
            <div class="links"><a href="index.php" style="text-decoration: none">Home</a><span> > </span><a onclick="mostraCadastro()">Cadastrar</a> <span> > </span><a>RH/Psicologo(a)</a> </div> 
            <br><br>
            <div>
                <label>Nome/Razão Social:</label>
                <input type="text" name="nome_rh" required id="nome_rh">

                <label>CPF/CNPJ:</label>
                <input type="number" name="cnpj_rh" required id="cnpj_rh">

            </div>
            <br>
            <div>
                <label>Telefone:</label>
                <input type="tel" name="telefone_rh" required id="telefone_rh">



            </div>
            <br>
            <div>
                <label>Email:</label>
                <input type="email" name="email_rh" required id="email_rh">

                <label>Senha:</label>
                <input type="password" name="senha_rh" required id="senha_rh">
            </div>
            <br>
            <a class="botaoLogin"  href="index.php">Cancelar</a>
            <button class="botaoLogin"  type="submit">Cadastrar</button>
            <br>
            <br>
            <br>

        </form>

    </div> 

    <!--    form rh-->








    <script>

        function mostraCadastro() {


            document.getElementById("escolhaCadastro").style.display = 'block';
            document.getElementById("login").style.display = 'none';
            document.getElementById("disc").style.display = 'none';
            document.getElementById("usuario").style.display = 'none';
            document.getElementById("rh").style.display = 'none';
        }


        function mostraDominancia() {

            document.getElementById("modaldominancia").style.display = 'block';

        }

        function fecharDominancia() {

            document.getElementById("modaldominancia").style.display = 'none';
        }


        function mostraInfluencia() {

            document.getElementById("modalinfluencia").style.display = 'block';

        }

        function fecharInfluencia() {

            document.getElementById("modalinfluencia").style.display = 'none';
        }

        function mostraEstabilidade() {

            document.getElementById("modalestabilidade").style.display = 'block';

        }

        function fecharEstabilidade() {

            document.getElementById("modalestabilidade").style.display = 'none';
        }

        function mostraCautela() {

            document.getElementById("modalcautela").style.display = 'block';

        }

        function fecharCautela() {

            document.getElementById("modalcautela").style.display = 'none';
        }

        function mostraLogin() {

            document.getElementById("login").style.display = 'block';
            document.getElementById("escolhaCadastro").style.display = 'none';
            document.getElementById("disc").style.display = 'none';
            document.getElementById("usuario").style.display = 'none';
            document.getElementById("rh").style.display = 'none';
        }

        function mostraUsuario() {

            document.getElementById("usuario").style.display = 'block';
            document.getElementById("escolhaCadastro").style.display = 'none';

        }

        function mostraRh() {

            document.getElementById("rh").style.display = 'block';
            document.getElementById("escolhaCadastro").style.display = 'none';

        }

        function fecharAlert() {

            document.getElementById("modalalert").style.display = 'none';
            mostraLogin();
        }





    </script>

    <script src='js/index.js' ></script>



</body>
</html>
