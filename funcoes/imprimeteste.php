<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$id_login = $_SESSION['usuarioId'];

$sql3 = mysqli_query($conn, "SELECT usuario.*, teste.* FROM usuario INNER JOIN teste ON usuario.id = teste.id_usuario INNER JOIN rh ON teste.id_empresa = rh.id where usuario.id = '$id' and rh.id_login = '$id_login' ORDER BY usuario.id DESC  ");
                 $resultado = mysqli_fetch_assoc($sql3);
                
               
                 
                 $d = $resultado['d'];
                 $i = $resultado['i'];
                 $s = $resultado['s'];
                 $c = $resultado['c'];
                 
//                 maior
                 if($d>$i && $d>$s && $d>$c ){    

               $mensagem= 'Dominante <br> São pessoas que possuem mais facilidade em lidar com desafios, pois são determinadas, exigentes, ousadas e assertivas. Por outro lado, essas pessoas não são muito atenciosas com os sentimentos e necessidades dos outros, podendo se tornar egoístas.';
               $corfundo = '#F32D2D';
               
                 }else if($i>$s && $i>$c){  
                    
           $mensagem ='Influente <br> São pessoas mais emocionais e que possuem grande habilidade em influenciar pessoas. São animadas, entusiasmadas, extrovertidas e motivadoras. Sabem persuadir, se comunicar e manter o otimismo. Entretanto, essas pessoas constantemente iniciam projetos e não os terminam, e seu entusiasmo pode parecer superficialidade para os outros.';
             $corfundo = '#49A55E';
           }else if($s>$c){
            $mensagem ='Estável <br> São pessoas que lidam melhor com rotinas e padrões. São paciêncientes, tranquilas, confiáveis, leais, persistentes e gentis. Por outro lado, a estabilidade muitas vezes é acompanhada pelo medo das mudanças e uma grande falta de iniciativa. Pessoas com essa tendência de comportamento possuem dificuldade em lidar com conflitos.';
            $corfundo = '#667FCE';
            }else{ 
            
            $mensagem ='Cauteloso<br>São pessoas que possuem uma maior facilidade em lidar com regras e processos. São metódicas, analíticas, técnicas e determinadas. Elas seguem ordens e normas, e realizam suas tarefas com um cuidado exemplar. Por serem muito perfeccionistas, tendem a se perder em detalhes e são extremamente críticas — tanto com elas mesmas, quanto com as outras pessoas.';
            $corfundo = '#F9BF3B';
           }
           
           
//               segundo maior
              if(($d<=$i && $d>=$s && $d>=$c)||($d>=$i && $d<=$s && $d>=$c) || ($d>=$i && $d>=$s && $d<=$c)){
               
              $mensagem2= 'Dominante <br> São pessoas que possuem mais facilidade em lidar com desafios, pois são determinadas, exigentes, ousadas e assertivas. Por outro lado, essas pessoas não são muito atenciosas com os sentimentos e necessidades dos outros, podendo se tornar egoístas.';
              $corfundo2 = '#F32D2D';
               
           }else if(($i<=$s && $i>=$d && $i>=$c) || ($i>=$s && $i<=$d && $i>=$c) || ($i>=$s && $i>=$d && $i<=$c)){
               
             $mensagem2 ='Influente <br> São pessoas mais emocionais e que possuem grande habilidade em influenciar pessoas. São animadas, entusiasmadas, extrovertidas e motivadoras. Sabem persuadir, se comunicar e manter o otimismo. Entretanto, essas pessoas constantemente iniciam projetos e não os terminam, e seu entusiasmo pode parecer superficialidade para os outros.';
             $corfundo2 = '#49A55E';
               
           }else if(($s<=$i && $s>=$d && $s>=$c) || ($s>=$i && $s<=$d && $s>=$c) || ($s>=$i && $s>=$d && $s<=$c)){
               
              $mensagem2 ='Estável <br> São pessoas que lidam melhor com rotinas e padrões. São paciêncientes, tranquilas, confiáveis, leais, persistentes e gentis. Por outro lado, a estabilidade muitas vezes é acompanhada pelo medo das mudanças e uma grande falta de iniciativa. Pessoas com essa tendência de comportamento possuem dificuldade em lidar com conflitos.';
               $corfundo2 = '#667FCE';
           }else{    
                           $mensagem2 ='Cauteloso<br>São pessoas que possuem uma maior facilidade em lidar com regras e processos. São metódicas, analíticas, técnicas e determinadas. Elas seguem ordens e normas, e realizam suas tarefas com um cuidado exemplar. Por serem muito perfeccionistas, tendem a se perder em detalhes e são extremamente críticas — tanto com elas mesmas, quanto com as outras pessoas.';
                           $corfundo2 = '#F9BF3B';
           }




?>

<html>
    
    <head>
        <style>
            
            h2{
                
                font-size: 15px;
                
            }
                 body{
                     -webkit-print-color-adjust: exact;
                    font-family: arial;
                     
                 }
                 
                 .estilo{
                     
                     background-color: <?php echo $corfundo ?>;
                     font-size: 14px;
                     color: #fff;
                     padding: 10px;
                 }
                 
                 .estilo2{
                     
                     background-color: <?php echo $corfundo2 ?>;
                     font-size: 14px;
                     color: #fff;
                     padding: 10px;
                 }
                 
                 @media print {
   
}
                 
             </style>
        
    </head>
    
    
    <body onload="Javascript:window.print();">
        
        
        
    



<div>
             
             
            
             <h2>Nome:<?php echo $resultado['nome'] ?></h2>
             <h2>Email:<?php echo $resultado['email'] ?></h2>
             <h2>Telefone/celular:<?php echo $resultado['telefone'] ?></h2>
             
             <h3>Este candidato é mais...</h3>
             
             <div class="estilo">
             
      
            <p for="nome"><?php echo $mensagem ?></p><br>
            
          
            
             </div>
             
             
             <h3>Com ascendente...</h3>
             
             <div class="estilo2">
             
               <p for="nome"><?php echo $mensagem2 ?></p><br>
            
             </div>
             
             <br>
             <br>
             
             <img style="width:50%" src="grafico.php?d=<?php echo $d ?>&i=<?php echo $i ?>&s=<?php echo $s ?>&c=<?php echo $c ?>">
             
             

        </div>

</body>
</html>






