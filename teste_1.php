<?php
include('funcoes/session.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DISC</title>
        <link rel="stylesheet" href="css/teste.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    </head>
    <body>

        <nav class="menu">
            <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="usuario.php">Disc</a>
            <a class="botao"  href="sair.php">Sair</a>
          


        </nav>  
        
        <div id="particles-js"></div>
         <h1 style="font-family: 'Pacifico', cursive;" >1 - 28</h1>
         <br>

       <h2 style="font-family: 'Pacifico', cursive;" >Escolha a palavra que mais e menos lhe define:</h2>

        <section class="sessao" id="sessao">


            <div class="questoes">
                <p></p>
                <p id="pergunta1">Entusiástico</p>
                <p id="pergunta2">Ousado</p>
                <p id="pergunta3">Perfeccionista</p>
                <p id="pergunta4">Satisfeito</p>
            </div>


            <div id="mais">
                <center>   <p>MAIS</p> </center>
                <input type="radio" name="mais" id="quadradomais" />
                <label class="label" for="quadradomais" id="labelquadradomais"><img  alt=""></label>
                <input type="radio" name="mais" id="zmais" />
                <label class="label" for="zmais" ></label>
                <input type="radio" name="mais" id="musicamais" />
                <label class="label" for="musicamais"><img  alt=""></label>
                <input type="radio" name="mais" id="triangulomais" />
                <label class="label" for="triangulomais"><img  alt=""></label>

                <input type='radio' name='mais' id='nmais' style="display: none;" />
                <label class='label' for='nmais' style="display: none;"><img  alt=''></label>

                <input type='radio' name='mais' id='n2mais' style="display: none;" />
                <label class='label' for='n2mais' style="display: none;"><img  alt=''></label>
            </div>  



            <div id="menos">
                <center>    <p>MENOS</p> </center>
                <input type="radio" name="menos" id="quadradomenos" />
                <label class="label2" for="quadradomenos"><img alt=""></label>
                <input type="radio" name="menos" id="zmenos" />
                <label class="label2" for="zmenos"></label>
                <input type="radio" name="menos" id="musicamenos" />
                <label class="label2" for="musicamenos"><img alt=""></label>
                <input type="radio" name="menos" id="triangulomenos" />
                <label class="label2" for="triangulomenos"><img  alt=""></label>


                <input type='radio' name='menos' id='nmais' style="display: none;"  />
                <label class='label' for='nmenos' style="display: none;"><img  alt=''></label>

                <input type='radio' name='menos' id='n2mais' style="display: none;" />
                <label class='label' for='n2menos' style="display: none;"><img  alt=''></label>
            </div>  

                
        </section>
        <a class="botaoproximo" style="margin-right:100px;" id="proximo" onclick="proximapagina();">></a>


        <form id="form" method="POST" action="funcoes/cadastrateste.php">
            <input value="" style="display: none" id="recebequadradomais" name="recebequadradomais">
            <input value="" style="display: none" id="recebezmais" name="recebezmais">
            <input value="" style="display: none" id="recebemusicamais" name="recebemusicamais">
            <input value="" style="display: none" id="recebetriangulomais" name="recebetriangulomais">


            <input value="" style="display: none" id="recebequadradomenos" name="recebequadradomenos">
            <input value="" style="display: none" id="recebezmenos" name="recebezmenos">
            <input value="" style="display: none" id="recebemusicamenos" name="recebemusicamenos">
            <input value="" style="display: none" id="recebetriangulomenos" name="recebetriangulomenos">
            <br>
            <br>
            <button  class="botao2" type="submit" style=" display: none; position: fixed; left: 50%;  transform: translate(-50%, -50%);" id="finalizar">Enviar Teste</button>


        </form>
        
        
        
        
        


        

        <script>

            var count = 1;
            var quadmais = 0;
            var trimais = 0;
            var musimais = 0;
            var zmais = 0;


            var quadmenos = 0;
            var trimenos = 0;
            var musimenos = 0;
            var zmenos = 0;
            
            

            var clickButton = document.querySelector("#proximo");
            
             
          

                     
                    



            function proximapagina() {


                var quadradomais = document.getElementById("quadradomais");
                var triangulomais = document.getElementById("triangulomais");
                var musicamais = document.getElementById("musicamais");
                var z2mais = document.getElementById("zmais");
                var nmais = document.getElementById("nmais");
                var n2mais = document.getElementById("n2mais");



                var quadradomenos = document.getElementById("quadradomenos");
                var triangulomenos = document.getElementById("triangulomenos");
                var musicamenos = document.getElementById("musicamenos");
                var z2menos = document.getElementById("zmenos");
                var nmenos = document.getElementById("nmenos");
                var n2menos = document.getElementById("n2menos");

               
              if ((quadradomais.checked || triangulomais.checked || musicamais.checked || z2mais.checked || nmais.checked || n2mais.checked)&&(quadradomenos.checked || triangulomenos.checked || musicamenos.checked || z2menos.checked || nmenos.checked || n2menos.checked)) {     
                count++;
            }
           
                 



                for (var i = 0; i <= count; i++) {

                    document.getElementsByTagName("h1")[0].innerHTML = i + " - 28";
                    switch (i) {



                        case 2:
                            document.getElementById("pergunta1").innerHTML = "Cauteloso";
                            document.getElementById("pergunta2").innerHTML = "Determinado";
                            document.getElementById("pergunta3").innerHTML = "Convincente";
                            document.getElementById("pergunta4").innerHTML = "Boa Pessoa";


                            document.getElementById("mais").innerHTML =
                                    "<center>   <p>MAIS</p> </center><input type='radio' name='mais' id='musicamais'/>\n\
                                     <label class='label' for='musicamais' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='zmais' />\n\
                                        <label class='label' for='zmais' ></label>\n\
                                        <input type='radio' name='mais' id='quadradomais' />\n\
                                        <label class='label' for='quadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='triangulomais' />\n\
                                        <label class='label' for='triangulomais'><img  alt=''></label>  ";

                            document.getElementById("menos").innerHTML =
                                    "<center>   <p>MENOS</p> </center><input type='radio' name='menos' id='musicamenos'/>\n\
                                     <label class='label2' for='musicamenos' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='zmenos' />\n\
                                        <label class='label2' for='zmenos' ></label>\n\
                                        <input type='radio' name='menos' id='quadradomenos' />\n\
                                        <label class='label2' for='quadradomenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='nmenos' />\n\
                                        <label class='label2' for='nmenos'><img  alt=''></label> \n\
<input type='radio' name='menos' id='triangulomenos' style='display: none;' />\n\
<label class='label' for='triangulomenos' style='display: none;'><img  alt=''></label>";
                            break;


                        case 3:


                            document.getElementById("pergunta1").innerHTML = "Amigo";
                            document.getElementById("pergunta2").innerHTML = "Exato";
                            document.getElementById("pergunta3").innerHTML = "Sincero";
                            document.getElementById("pergunta4").innerHTML = "Calmo";


                            document.getElementById("mais").innerHTML =
                                    "   <center>   <p>MAIS</p> </center>\n\
                                        <input type='radio' name='mais' id='quadradomais'/>\n\
                                        <label class='label' for='quadradomais' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='musicamais' />\n\
                                        <label class='label' for='musicamais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='zmais' />\n\
                                        <label class='label' for='zmais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='nmais' />\n\
                                        <label class='label' for='nmais'><img  alt=''></label> \n\
<input type='radio' name='mais' id='triangulomais' style='display: none;' />\n\
<label class='label' for='triangulomais' style='display: none;'><img  alt=''></label>";


                            document.getElementById("menos").innerHTML =
                                    "   <center>   <p>MENOS</p> </center>\n\
                                        <input type='radio' name='menos' id='nmenos'/>\n\
                                        <label class='label2' for='nmenos' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='musicamenos' />\n\
                                        <label class='label2' for='musicamenos' ></label>\n\
                                        <input type='radio' name='menos' id='zmenos' />\n\
                                        <label class='label2' for='zmenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='triangulomenos' />\n\
                                        <label class='label2' for='triangulomenos'><img  alt=''></label> \n\
<input type='radio' name='menos' id='quadradomenos' style='display: none;' />\n\
<label class='label' for='quadradomenos' style='display: none;'><img  alt=''></label>";
                            break;



                        case 4:


                            document.getElementById("pergunta1").innerHTML = "Falador";
                            document.getElementById("pergunta2").innerHTML = "Controlado";
                            document.getElementById("pergunta3").innerHTML = "Convencional";
                            document.getElementById("pergunta4").innerHTML = "Decisivo";


                            document.getElementById("mais").innerHTML =
                                    "   <center>   <p>MAIS</p> </center>\n\
                                        <input type='radio' name='mais' id='quadradomais'/>\n\
                                        <label class='label' for='quadradomais' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='musicamais' />\n\
                                        <label class='label' for='musicamais' ></label>\n\
                                        <input type='radio' name='mais' id='triangulomais' />\n\
                                        <label class='label' for='triangulomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='zmais' />\n\
                                        <label class='label' for='zmais'><img  alt=''></label> ";


                            document.getElementById("menos").innerHTML =
                                    "   <center>   <p>MENOS</p> </center>\n\
                                        <input type='radio' name='menos' id='quadradomenos'/>\n\
                                        <label class='label2' for='quadradomenos' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='musicamenos' />\n\
                                        <label class='label2' for='musicamenos'></label>\n\
                                        <input type='radio' name='menos' id='triangulomenos' />\n\
                                        <label class='label2' for='triangulomenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='zmenos' />\n\
                                        <label class='label2' for='zmenos'><img  alt=''></label> ";

                            break;



                        case 5:

                            document.getElementById("pergunta1").innerHTML = "Aventureiro";
                            document.getElementById("pergunta2").innerHTML = "Observador";
                            document.getElementById("pergunta3").innerHTML = "Aberto";
                            document.getElementById("pergunta4").innerHTML = "Moderado";


                            document.getElementById("mais").innerHTML =
                                    "   <center>   <p>MAIS</p> </center>\n\
                                        <input type='radio' name='mais' id='zmais'/>\n\
                                        <label class='label' for='zmais' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='musicamais' />\n\
                                        <label class='label' for='musicamais' ></label>\n\
                                        <input type='radio' name='mais' id='quadradomais' />\n\
                                        <label class='label' for='quadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='triangulomais' />\n\
                                        <label class='label' for='triangulomais'><img  alt=''></label> ";


                            document.getElementById("menos").innerHTML =
                                    "   <center>   <p>MENOS</p> </center>\n\
                                        <input type='radio' name='menos' id='zmenos'/>\n\
                                        <label class='label2' for='zmenos' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='musicamenos' />\n\
                                        <label class='label2' for='musicamenos' ></label>\n\
                                        <input type='radio' name='menos' id='quadradomenos' />\n\
                                        <label class='label2' for='quadradomenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='triangulomenos' />\n\
                                        <label class='label2' for='triangulomenos'><img  alt=''></label> ";

                            break;


                        case 6:

                            document.getElementById("pergunta1").innerHTML = "Gentil";
                            document.getElementById("pergunta2").innerHTML = "Persuasivo";
                            document.getElementById("pergunta3").innerHTML = "Modesto";
                            document.getElementById("pergunta4").innerHTML = "Criativo";


                            document.getElementById("mais").innerHTML =
                                    "   <center>   <p>MAIS</p> </center>\n\
                                        <input type='radio' name='mais' id='triangulomais'/>\n\
                                        <label class='label' for='triangulomais' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='quadradomais' />\n\
                                        <label class='label' for='quadradomais' ></label>\n\
                                        <input type='radio' name='mais' id='nmais' />\n\
                                        <label class='label' for='nmais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='n2mais' />\n\
                                        <label class='label' for='n2mais'><img  alt=''></label> \n\
<input type='radio' name='mais' id='musicamais' style='display: none;' />\n\
<label class='label' for='musicamais' style='display: none;'><img  alt=''></label>\n\
<input type='radio' name='mais' id='zmais' style='display: none;' />\n\
<label class='label' for='zmais' style='display: none;'><img  alt=''></label>";


                            document.getElementById("menos").innerHTML =
                                    "   <center>   <p>MENOS</p> </center>\n\
                                        <input type='radio' name='menos' id='triangulomenos'/>\n\
                                        <label class='label2' for='triangulomenos' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='nmenos' />\n\
                                        <label class='label2' for='nmenos' ></label>\n\
                                        <input type='radio' name='menos' id='musicamenos' />\n\
                                        <label class='label2' for='musicamenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='zmenos' />\n\
                                        <label class='label2' for='zmenos'><img  alt=''></label> \n\
<input type='radio' name='menos' id='quadradomenos' style='display: none;' />\n\
<label class='label' for='quadradomenos' style='display: none;'><img  alt=''></label>";

                            break;



                        case 7:

                            document.getElementById("pergunta1").innerHTML = "Expressivo";
                            document.getElementById("pergunta2").innerHTML = "Consciencioso";
                            document.getElementById("pergunta3").innerHTML = "Dominante";
                            document.getElementById("pergunta4").innerHTML = "Disposto";


                            document.getElementById("mais").innerHTML =
                                    "   <center>   <p>MAIS</p> </center>\n\
                                        <input type='radio' name='mais' id='quadradomais'/>\n\
                                        <label class='label' for='quadradomais' id='labelquadradomais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='musicamais' />\n\
                                        <label class='label' for='musicamais' ></label>\n\
                                        <input type='radio' name='mais' id='zmais' />\n\
                                        <label class='label' for='zmais'><img  alt=''></label>\n\
                                        <input type='radio' name='mais' id='nmais' />\n\
                                        <label class='label' for='nmais'><img  alt=''></label> \n\
<input type='radio' name='mais' id='triangulomais' style='display: none;' />\n\
<label class='label' for='triangulomais' style='display: none;'><img  alt=''></label>";





                            document.getElementById("menos").innerHTML =
                                    "   <center>   <p>MENOS</p> </center>\n\
                                        <input type='radio' name='menos' id='quadradomenos' />\n\
                                        <label class='label2' for='quadradomenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='musicamenos' />\n\
                                        <label class='label2' for='musicamenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='zmenos' />\n\
                                        <label class='label2' for='zmenos'><img  alt=''></label>\n\
                                        <input type='radio' name='menos' id='triangulomenos' />\n\
                                        <label class='label2' for='triangulomenos'><img  alt=''></label> ";

                            break;





                       

                      







                    }



                }




                if (quadradomais.checked) {

                    ++quadmais;
                }


                if (triangulomais.checked) {

                    ++trimais;
                }

                if (musicamais.checked) {

                    ++musimais;
                }

                if (z2mais.checked) {

                    ++zmais;
                }




                if (quadradomenos.checked) {

                    ++quadmenos;
                }

                if (triangulomenos.checked) {

                    ++trimenos;
                }

                if (musicamenos.checked) {

                    ++musimenos;
                }

                if (z2menos.checked) {

                    ++zmenos;
                }









                if (count == 8) {

                    document.getElementsByTagName("h2")[0].innerHTML = "Teste Finalizado";
                            document.getElementsByTagName("h1")[0].style.display = 'none';
                    document.getElementById("proximo").style.display = 'none';
                    document.getElementById("sessao").style.display = 'none';
                    document.getElementById("finalizar").style.display = 'block';
                    document.getElementById("recebequadradomais").value = quadmais;
                    document.getElementById("recebezmais").value = zmais;
                    document.getElementById("recebemusicamais").value = musimais;
                    document.getElementById("recebetriangulomais").value = trimais;

                    document.getElementById("recebequadradomenos").value = quadmenos;
                    document.getElementById("recebezmenos").value = zmenos;
                    document.getElementById("recebemusicamenos").value = musimenos;
                    document.getElementById("recebetriangulomenos").value = trimenos;



                }

            }







        </script>
       
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
         <script src="js/particle-stars.js"></script>
    </body>
</html>

