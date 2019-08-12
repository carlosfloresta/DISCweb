<?php
session_start();
include_once("conexao.php");



$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
   
    case 'form_ver':
        
       $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $sql3 = mysqli_query($conn, "SELECT usuario.nome, teste.* FROM usuario INNER JOIN teste ON usuario.id = teste.id_usuario INNER JOIN rh ON teste.id_empresa = rh.id where usuario.id = '$id' ORDER BY usuario.id DESC  ");
                 $resultado = mysqli_fetch_assoc($sql3);
           
 
        
        ?>
        
         <form action="" name="form_ver" method="post">
             
             <style>
                 
                 .estilo{
                     
                     background-color: #49A55E;
                     font-size: 20px;
                     color: #fff;
                     padding: 10px;
                 }
                 
                 .estilo2{
                     
                     background-color: #F32D2D;
                     font-size: 20px;
                     color: #fff;
                     padding: 10px;
                 }
                 
             </style>
            
             <h2><?php echo $resultado['nome'] ?></h2>
             
             <h3>Este candidato é mais...</h3>
             
             <div class="estilo">
             
             <?php if($resultado['d']>$resultado['i'] && $resultado['d']>$resultado['s'] && $resultado['d']>$resultado['c'] ){     ?>

                <p for="nome">Dominante</p><br>
                <p for="nome">São pessoas que possuem mais facilidade em lidar com desafios, pois são determinadas, exigentes, ousadas e assertivas. Por outro lado, essas pessoas não são muito atenciosas com os sentimentos e necessidades dos outros, podendo se tornar egoístas.</p><br>
             <?php }else if($resultado['i']>$resultado['d'] && $resultado['i']>$resultado['s'] && $resultado['i']>$resultado['c']){  ?>  
         
            <p for="nome">Influente</p><br>
            <p for="nome">São pessoas mais emocionais e que possuem grande habilidade em influenciar pessoas. São animadas, entusiasmadas, extrovertidas e motivadoras. Sabem persuadir, se comunicar e manter o otimismo. Entretanto, essas pessoas constantemente iniciam projetos e não os terminam, e seu entusiasmo pode parecer superficialidade para os outros.</p><br>
            
             <?php }else if($resultado['s']>$resultado['d'] && $resultado['s']>$resultado['i'] && $resultado['s']>$resultado['c']){ ?>
            <p for="nome">Estável</p><br>
            <p for="nome">São pessoas que lidam melhor com rotinas e padrões. São paciêncientes, tranquilas, confiáveis, leais, persistentes e gentis. Por outro lado, a estabilidade muitas vezes é acompanhada pelo medo das mudanças e uma grande falta de iniciativa. Pessoas com essa tendência de comportamento possuem dificuldade em lidar com conflitos.</p><br>
            
             <?php }else if($resultado['c']>$resultado['d'] && $resultado['c']>$resultado['i'] && $resultado['c']>$resultado['s']){ ?>
            
            <p for="nome">Cauteloso</p><br>
            <p for="nome">São pessoas que possuem uma maior facilidade em lidar com regras e processos. São metódicas, analíticas, técnicas e determinadas. Elas seguem ordens e normas, e realizam suas tarefas com um cuidado exemplar. Por serem muito perfeccionistas, tendem a se perder em detalhes e são extremamente críticas — tanto com elas mesmas, quanto com as outras pessoas.</p><br>
            
            <?php } ?>
            
             </div>
             
             
             <h3>Este candidato é menos...</h3>
             
             <div class="estilo2">
             
             <?php if($resultado['d']<$resultado['i'] && $resultado['d']<$resultado['s'] && $resultado['d']<$resultado['c'] ){     ?>

                <p for="nome">Dominante</p><br>
                <p for="nome">São pessoas que possuem mais facilidade em lidar com desafios, pois são determinadas, exigentes, ousadas e assertivas. Por outro lado, essas pessoas não são muito atenciosas com os sentimentos e necessidades dos outros, podendo se tornar egoístas.</p><br>
             <?php }else if($resultado['i']<$resultado['d'] && $resultado['i']<$resultado['s'] && $resultado['i']<$resultado['c']){  ?>  
         
            <p for="nome">Influente</p><br>
            <p for="nome">São pessoas mais emocionais e que possuem grande habilidade em influenciar pessoas. São animadas, entusiasmadas, extrovertidas e motivadoras. Sabem persuadir, se comunicar e manter o otimismo. Entretanto, essas pessoas constantemente iniciam projetos e não os terminam, e seu entusiasmo pode parecer superficialidade para os outros.</p><br>
            
             <?php }else if($resultado['s']<$resultado['d'] && $resultado['s']<$resultado['i'] && $resultado['s']<$resultado['c']){ ?>
            <p for="nome">Estável</p><br>
            <p for="nome">São pessoas que lidam melhor com rotinas e padrões. São paciêncientes, tranquilas, confiáveis, leais, persistentes e gentis. Por outro lado, a estabilidade muitas vezes é acompanhada pelo medo das mudanças e uma grande falta de iniciativa. Pessoas com essa tendência de comportamento possuem dificuldade em lidar com conflitos.</p><br>
            
             <?php }else if($resultado['c']<$resultado['d'] && $resultado['c']<$resultado['i'] && $resultado['c']<$resultado['s']){ ?>
            
            <p for="nome">Cauteloso</p><br>
            <p for="nome">São pessoas que possuem uma maior facilidade em lidar com regras e processos. São metódicas, analíticas, técnicas e determinadas. Elas seguem ordens e normas, e realizam suas tarefas com um cuidado exemplar. Por serem muito perfeccionistas, tendem a se perder em detalhes e são extremamente críticas — tanto com elas mesmas, quanto com as outras pessoas.</p><br>
            
            <?php } ?>
            
             </div>
             
             

        </form>
        
        <?php
        
        break;              
                
}    

