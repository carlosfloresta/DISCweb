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
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/particule.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>


        


        <nav class="menu">
            
            <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="index.php">Disc</a>
            
            <a class="botaoDuvida" href="privacidade.php">?</a>
            <a class="botao"  onclick="mostraLogin()">LOGIN</a>
            <a class="botao" onclick="mostraCadastro()">CADASTRAR</a>
          
<!--            <a class="botaoRedesSociais" href="index.php">ENTRAR COM REDES SOCIAIS</a>-->
        
<!--              <a class="botao" onclick="mostraCadastro()">Conheça nosso Sistema</a>-->
        </nav>
        
        <nav class="menumobiletopo">
            
            <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="index.php">Disc</a>
            
            <a class="botaoDuvida" href="privacidade.php">?</a>
  
        </nav>
        
        <nav class="menumobile" id="menumobile">
            
            
            
            <a class="botaomobile2" onclick="mostraCadastro()">Cadastrar</a>
            <a class="botaomobile1"  onclick="mostraLogin()">Login</a>
        </nav>
        
       
        <div id="particles-js"></div>


        <div id="disc" class="scrollDisc">
           
<h1 >Avaliação Comportamental</h1>
<br>

        <div class="disc" >
            
            <h2 style="font-family: 'Pacifico', cursive;">DISC</h2>

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
                <center> <form class="login"   method="POST" action="funcoes/validalogin.php">
            
            <br>
            <div class="border">
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
            <a style="font-size: 15px" class="esqueceuSenha" onclick="mostraEsqueceuSenha()" >Esqueceu a senha?</a><BR>
          
            <button class="botaoLogin2" id="entrar" type="submit">ENTRAR</button>
            <a class="botaoLogin3" id="cancelar2"  href="index.php">CANCELAR</a>
            </div>
            
 
        </form> </center>
                
                 
                </div>
        
        
        <!--      form esqueceu senha  -->
        <div id="esqueceuSenha" style="display: none">
                <h1>Esqueceu a senha?</h1>
                <center> <form class="login"   method="POST" action="funcoes/esqueceusenha.php">
            
            <br>
            <div class="border">
            <div>
                <label>Email:</label>
                <input type="email" name="email" required id="email">
            </div>
           
            <br>
           
          
            <button class="botaoLogin2" id="cadastrar" type="submit">ENVIAR</button>
            <a class="botaoLogin3" id="cancelar"  href="index.php">CANCELAR</a>
            </div>
            
 
        </form> </center>
                
                 
                </div>


        <?php
        //Recuperando o valor da variável global, os erro de login.
        if (isset($_SESSION['loginErro'])) {
            ?>
            
            <div class="modalalert" style="display: block;" id="modalalert" ><div class="content"><div class="scroll">
                    <center>
                        <img src="img/alert.png">
                        <h2 style="color: #282828; font-family: arial;">Oops...</h2>
                        <h3 style="color: #282828; font-family: arial;">Email ou senha Incorretos</h3>
                        <a onclick="fecharAlert()">OK</a>

                    </center></div> </div><?php unset($_SESSION['loginErro']); ?>




           
            </div>
            <?php
            unset($_SESSION['loginErro']);
        }
        ?>


      


        <!--      form login  -->      



        <!--        seleção de cadastro-->
        <div id="escolhaCadastro" style="display: none">
            <h1>Cadastrar</h1>
        
        <div class="escolhacadastro" >
            <div class="links"><a href="index.php" style="text-decoration: none; font-size: 20px; color:#fff">Home</a><span> > </span><a style="font-size: 20px">Cadastrar</a> </div> 
            <br><br>

            <a class="opcao" onclick="mostraUsuario()">Candidato(a)</a>


            <a class="opcao" onclick="mostraRh()">RH/Psicólogo(a)</a>
        </div>

    </div>
    <!--        seleção de cadastro--> 
    
    <style>
        
        
        
 .submit-lente {
  position:absolute;
  top:0; right:10px;
  z-index:10;
  border:none;
  background:transparent;
  outline:none;
}

.submit-line {
  position: relative;
  width: 100%;
}

.submit-line input {
  width: 100%;
}  
        
        
        
    </style>

    <!--    form usuario-->

    <div class="scroll" id="usuario" style="display: none; ">
        <h1>Candidato(a)</h1>
        <center>
        <form class="usuario"   method="POST" action="funcoes/cadastrausuario.php">
           
            <div id="alerta"></div>
            <br>
          
            <div class="centraliza">
            <div class="dadospessoais">
                <center>  <p>Dados Pessoais</p></center>
                <label>Nome:</label>
                <input type="text" name="nome_usuario" required id="nome_usuario">
                <input style="display: none" type="text" name="cpf_usuario" required id="cpf_usuario">
                <label>CPF:</label>
                <input type="text" name="cpf1" onkeypress="return mask(event, this, '###.###.###-##')" maxlength="14" required id="cpf1">
                <input style="display: none" type="text" name="telefone_usuario" required id="telefone_usuario">
                <label>Telefone:</label>
                <input type="text" name="telefone1"  maxlength="13" onkeypress="return mask(event, this, '## #####-####')"  required id="telefone1">
            </div>
           
            <div class="empresa">
                 <center>  <p>RH/Psicólogo</p></center>
                
                
            
                
                 <label>Código de Acesso:</label>
                 
                 <div class="submit-line">
  <input type="text" name="codigo_acesso_rh" required id="codigo_acesso_rh">
  <a class="submit-lente" href="#" onMouseOver="toolTip('Este é o código que o RH/Psicólogo te informou, caso não tenha o mesmo entre em contato com o responsável, solicitando o código de acesso para realizar a avaliação DISC.', 200)" onMouseOut="toolTip()">
   <i class="fa fa-question-circle" style="font-size:35px; color:#fff"></i>
  </a>
</div>
               

            </div>
           
            <div class="dadosacesso">
                 <center>  <p>Dados de Acesso</p></center>
                <label>Email:</label>
                <input type="email" name="email_usuario" required id="email_usuario">
                <input style="display: none" type="password" name="senha_usuario" required id="senha_usuario">
                <label>Senha:</label><label style="font-size: 12px">(Mínimo: 8 Caracteres)</label>
                <input type="password" minlength="8"  required id="senha1"  maxlength="25">
               
                <label>Confirme a senha:</label>
                <input type="password" minlength="8" required id="senha2"  maxlength="25">
            </div>
                
                </div>
            
            <div style=" margin: 0 auto; width: 50%; height: 10%; ">
  
                <label style=" font-size: 12px; ">   <input style="width: 20px; margin-top: 20px;" type="checkbox" required> Li e concordo com os <a target="_blanck" style="font-size: 12px; color:#fff;" href="privacidade.php">Termos de Uso.</a></label>
</div>
 
            <div class="centraliza2">
               
               
            <a class="cancelar" id="cancelar"  href="index.php">Cancelar</a>
            <button class="cadastrar" id="cadastrar" onclick="confirmaSenha()" type="submit">Cadastrar</button>
             
             </div>
             
<br>
<br>
    
        </form>
            
            </center>

    </div> 
    
    
    
  


           
            

          
    
            
    
    
    
    


    <!--    form usuario-->

    <!--    form rh-->

    <div class="scroll" id="rh" style="display: none" >
        <h1>RH/Psicólogo(a)</h1>
        <center>
        <form class="rh" method="POST" action="funcoes/cadastrarh.php">
           
             <div id="alerta_rh"></div>
            <br>
            
            <div class="centraliza">
            <div class="dadospessoais">
                 <center>  <p>Dados Pessoais</p></center>
                <label>Nome/Razão Social:</label>
                <input type="text" name="nome_rh" required id="nome_rh">
                 <input style="display: none" type="text" name="cnpj_rh" required id="cnpj_rh">
                <label>CPF/CNPJ:</label>
                <input type="text" name="cpf2" onkeypress="return mask(event, this,'##.###.###/####-##')" maxlength="18" required id="cpf2">
                <input style="display: none" type="text" name="telefone_rh" required id="telefone_rh">
                <label>Telefone:</label>
                <input type="tel" name="telefone2" maxlength="13" onkeypress="return mask(event, this, '## #####-####')" required id="telefone2">
            </div>
                
                <div class="empresa">
                     <center>  <p>RH/Psicólogo</p></center>
                    <label>Código de Acesso:</label>
                                   <div class="submit-line">
  <input type="text" name="codigo_rh" required id="codigo_rh">
  <a class="submit-lente" href="#" onMouseOver="toolTip('Crie um código único que deverá ser informado para o candidato, para que o mesmo possa fazer o cadastro, e a avaliação ser direcionada para seu perfil', 200)" onMouseOut="toolTip()">
   <i class="fa fa-question-circle" style="font-size:35px; color:#fff"></i>
  </a>
</div>
                
                    
                </div>
           
           
                <div class="dadosacesso">
                     <center>  <p>Dados de Acesso</p></center>
                <label>Email:</label>
                <input type="email" name="email_rh" required id="email_rh">

               
                <input type="password" style="display: none" name="senha_rh" required id="senha_rh">
                
                <label>Senha:</label><label style="font-size: 12px">(Mínimo: 8 Caracteres)</label>
                <input type="password" minlength="8"  required id="senha3" maxlength="25" >
             
                <label>Confirme a senha:</label>
                <input type="password" minlength="8" required id="senha4" maxlength="25">
                
            </div>
                
                     <div style=" margin: 0 auto; width: 50%; height: 10%; ">
  
                <label style=" font-size: 12px; ">   <input style="width: 20px; margin-top: 20px;" type="checkbox" required> Li e concordo com os <a target="_blanck" style="font-size: 12px; color:#fff;" href="privacidade.php">Termos de Uso.</a></label>
</div>
               
           
            </div>
           
            <div class="centraliza2">
            <a class="cancelar" id="cancelar"  href="index.php">Cancelar</a>
            <button class="cadastrar" id="cadastrar" onclick="confirmaSenha2()"  type="submit">Cadastrar</button>
            </div>
            
            

        </form>
            </center>
        
           
           

    </div> 

    <!--    form rh-->








    <script>

        function mostraCadastro() {


            document.getElementById("escolhaCadastro").style.display = 'block';
            document.getElementById("login").style.display = 'none';
            document.getElementById("disc").style.display = 'none';
            document.getElementById("usuario").style.display = 'none';
            document.getElementById("rh").style.display = 'none';
             document.getElementById("esqueceuSenha").style.display = 'none';
            document.getElementById("menumobile").style.display = 'none';
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
            
            document.getElementById("menumobile").style.display = 'none';
            document.getElementById("esqueceuSenha").style.display = 'none';
        }
        
        
         function mostraEsqueceuSenha() {

            document.getElementById("esqueceuSenha").style.display = 'block';
            document.getElementById("escolhaCadastro").style.display = 'none';
            document.getElementById("login").style.display = 'none';
            document.getElementById("disc").style.display = 'none';
            document.getElementById("usuario").style.display = 'none';
            document.getElementById("rh").style.display = 'none';
            
            document.getElementById("menumobile").style.display = 'none';
        }

        function mostraUsuario() {
            document.getElementById("disc").style.display = 'none';
            document.getElementById("usuario").style.display = 'block';
            document.getElementById("escolhaCadastro").style.display = 'none';
             

        }

        function mostraRh() {
             document.getElementById("disc").style.display = 'none';
            document.getElementById("rh").style.display = 'block';
            document.getElementById("escolhaCadastro").style.display = 'none';

        }

        function fecharAlert() {

            document.getElementById("modalalert").style.display = 'none';
            mostraLogin();
        }
        
        
        
        
        function confirmaSenha(){
       var senha1 = document.getElementById("senha1").value;
        var senha2 = document.getElementById("senha2").value;
        
         var celular = document.getElementById('telefone1').value;
         var cpfusu = document.getElementById('cpf1').value;
         var cel = celular.replace(/[^0-9]/g, '');
         var cpf = cpfusu.replace(/[^0-9]/g, '');
          if (cel.length === 11 || cel.length === 10) {
              
              document.getElementById("telefone_usuario").value = cel;
              
              
          }else {

                    document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "Por favor preencha o campo telefone com 11 ou 10 numeros!";
            document.getElementById("usuario").scrollTo(0, 0);
                }
                
                
                 if (cpf.length === 11) {
              
              document.getElementById("cpf_usuario").value = cpf;
              
              
          }else {
              
              

                    document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "Por favor preencha o campo cpf com 11 numeros!";
            document.getElementById("usuario").scrollTo(0, 0);
                }
        
        if(senha1 === senha2){
            
           document.getElementById("senha_usuario").value = senha1;
            
        }else{
            
            document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "As senhas digitadas não se coincidem";
            document.getElementById("usuario").scrollTo(0, 0);
           
        }

        }
        
        
        function confirmaSenha2(){
       var senha3 = document.getElementById("senha3").value;
        var senha4 = document.getElementById("senha4").value;
        
        var celular = document.getElementById('telefone2').value;
         var cpfusu = document.getElementById('cpf2').value;
         var cel = celular.replace(/[^0-9]/g, '');
         var cpf = cpfusu.replace(/[^0-9]/g, '');
          if (cel.length === 11 || cel.length === 10) {
              
              document.getElementById("telefone_rh").value = cel;
              
              
          }else {

                    document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "Por favor preencha o campo telefone com 11 ou 10 numeros!";
            document.getElementById("rh").scrollTo(0, 0);
                }
                
                
                 if (cpf.length === 11 || cpf.length === 14) {
              
              document.getElementById("cnpj_rh").value = cpf;
              
              
          }else {

                    document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "Por favor preencha o campo cpf/cnpj com 11/14 numeros!";
            document.getElementById("rh").scrollTo(0, 0);
                }
        
        
        if(senha3 === senha4){
            
           document.getElementById("senha_rh").value = senha3;
            
        }else{
            
           document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "As senhas digitadas não se coincidem";
             document.getElementById("rh").scrollTo(0, 0);
        }

        }
        
        
        
       function mask(e, id, mask) {
            var tecla = (window.event) ? event.keyCode : e.which;
            if ((tecla > 47 && tecla < 58)) {
                mascara(id, mask);
                return true;
            } else {
                if (tecla == 8 || tecla == 0) {
                    mascara(id, mask);
                    return true;
                } else
                    return false;
            }
        }
        function mascara(id, mask) {
            var i = id.value.length;
            var carac = mask.substring(i, i + 1);
            var prox_char = mask.substring(i + 1, i + 2);
            if (i == 0 && carac != '#') {
                insereCaracter(id, carac);
                if (prox_char != '#')
                    insereCaracter(id, prox_char);
            } else if (carac != '#') {
                insereCaracter(id, carac);
                if (prox_char != '#')
                    insereCaracter(id, prox_char);
            }
            function insereCaracter(id, char) {
                id.value += char;
            }
        }
 
       
 
    
        


    </script>
    
<!--    alerts cadastro usuario-->
    
    <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['emailjaexiste'])) {

        ?><script>
        
         document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "Você já tem cadastro com esse email em nosso sistema!";
            document.getElementById("usuario").scrollTo(0, 0);
            mostraUsuario();
        </script><?php
        
         unset($_SESSION['emailjaexiste']);
         
         }
        ?>
        
         <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['emailoutrousu'])) {

        ?><script>
        
         document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "Este email já está cadastrado em RH/Psicologo(a), escolha outro!";
            document.getElementById("usuario").scrollTo(0, 0);
            mostraUsuario();
        </script><?php
        
         unset($_SESSION['emailoutrousu']);
         
         }
        ?>
        
         <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['cpfexiste'])) {

        ?><script>
        
         document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "O CPF digitado já existe em nosso sistema!";
            document.getElementById("usuario").scrollTo(0, 0);
            mostraUsuario();
        </script><?php
        
         unset($_SESSION['cpfexiste']);
         
         }
        ?>
        
        
        <!--    alerts cadastro rh-->
    
    <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['emailjaexiste2'])) {

        ?><script>
        
         document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "Você já tem cadastro com esse email em nosso sistema!";
            document.getElementById("rh").scrollTo(0, 0);
            mostraRh();
        </script><?php
        
         unset($_SESSION['emailjaexiste2']);
         
         }
        ?>
        
         <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['emailoutrousu2'])) {

        ?><script>
        
         document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "Este email já está cadastrado em usuario que será avaliado, escolha outro!";
            document.getElementById("rh").scrollTo(0, 0);
            mostraRh();
        </script><?php
        
         unset($_SESSION['emailoutrousu2']);
         
         }
        ?>
        
         <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['cnpjexiste'])) {

        ?><script>
        
         document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "O CPF/CNPJ digitado já existe em nosso sistema!";
            document.getElementById("rh").scrollTo(0, 0);
            mostraRh();
        </script><?php
        
         unset($_SESSION['cnpjexiste']);
         
         }
        ?>
        
        
         <?php
        //alerts codigo rh.
        if (isset($_SESSION['codigonaoexiste'])) {

        ?><script>
        
         document.getElementById("alerta").style.background = 'red';
            document.getElementById("alerta").style.padding = '20px';
             document.getElementById("alerta").innerHTML = "Não existe nenhum RH/Psicólogo com este código, por favor tente novamente!";
            document.getElementById("usuario").scrollTo(0, 0);
            mostraUsuario();
        </script><?php
        
         unset($_SESSION['codigonaoexiste']);
         
         }
        ?>
        
         <?php
        //alerts cadastro usuario.
        if (isset($_SESSION['codigoexiste'])) {

        ?><script>
        
         document.getElementById("alerta_rh").style.background = 'red';
            document.getElementById("alerta_rh").style.padding = '20px';
             document.getElementById("alerta_rh").innerHTML = "O código de acesso já existe, tente outro!";
            document.getElementById("rh").scrollTo(0, 0);
            mostraRh();
        </script><?php
        
         unset($_SESSION['codigoexiste']);
         
         }
        ?>
    
    
    
    
    
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 

    <script src='js/index.js' ></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
    <script src='js/particle.js' ></script>



</body>
</html>
