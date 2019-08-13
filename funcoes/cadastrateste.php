<?php

session_start();
include_once("conexao.php");
include_once("email.php");

$quadrado_mais = mysqli_real_escape_string($conn, $_POST['recebequadradomais']);
$triangulo_mais = mysqli_real_escape_string($conn, $_POST['recebetriangulomais']);
$musica_mais = mysqli_real_escape_string($conn, $_POST['recebemusicamais']);
$z_mais = mysqli_real_escape_string($conn, $_POST['recebezmais']);

$quadrado_menos = mysqli_real_escape_string($conn, $_POST['recebequadradomenos']);
$triangulo_menos = mysqli_real_escape_string($conn, $_POST['recebetriangulomenos']);
$musica_menos = mysqli_real_escape_string($conn, $_POST['recebemusicamenos']);
$z_menos = mysqli_real_escape_string($conn, $_POST['recebezmenos']);


$d = $z_mais - $z_menos;
$i = $quadrado_mais - $quadrado_menos;
$s = $triangulo_mais - $triangulo_menos;
$c = $musica_mais - $musica_menos;


 if($d>$i && $d>$s && $d>$c ){    

               $maior= 'Dominante <br> São pessoas que possuem mais facilidade em lidar com desafios, pois são determinadas, exigentes, ousadas e assertivas. Por outro lado, essas pessoas não são muito atenciosas com os sentimentos e necessidades dos outros, podendo se tornar egoístas.';
            
               
                 }else if($i>$d && $i>$s && $i>$c){  
         
           $maior ='Influente <br> São pessoas mais emocionais e que possuem grande habilidade em influenciar pessoas. São animadas, entusiasmadas, extrovertidas e motivadoras. Sabem persuadir, se comunicar e manter o otimismo. Entretanto, essas pessoas constantemente iniciam projetos e não os terminam, e seu entusiasmo pode parecer superficialidade para os outros.';
            
           }else if($s>$d && $s>$i && $s>$c){
            $maior='Estável <br> São pessoas que lidam melhor com rotinas e padrões. São paciêncientes, tranquilas, confiáveis, leais, persistentes e gentis. Por outro lado, a estabilidade muitas vezes é acompanhada pelo medo das mudanças e uma grande falta de iniciativa. Pessoas com essa tendência de comportamento possuem dificuldade em lidar com conflitos.';
            
            }else if($c>$d && $c>$i && $c>$s){ 
            
            $maior ='Cauteloso<br>São pessoas que possuem uma maior facilidade em lidar com regras e processos. São metódicas, analíticas, técnicas e determinadas. Elas seguem ordens e normas, e realizam suas tarefas com um cuidado exemplar. Por serem muito perfeccionistas, tendem a se perder em detalhes e são extremamente críticas — tanto com elas mesmas, quanto com as outras pessoas.';
            
           }



$id = $_SESSION['usuarioId'];
$sql2 = mysqli_query($conn, "SELECT usuario.nome, usuario.email, usuario.id, usuario.id_empresa, usuario.telefone FROM usuario INNER JOIN login ON usuario.id_login = login.id where usuario.id_login = '$id' ");
$resultado2 = mysqli_fetch_array($sql2);

$id_usuario = $resultado2['id'];
$id_empresa = $resultado2['id_empresa'];
$email_usuario = $resultado2['email'];
$nome_usuario = $resultado2['nome'];
$telefone_usuario = $resultado2['telefone'];


if ($resultado2) {


    $result_teste = "INSERT INTO teste(d, i, s, c, id_usuario, id_empresa) values('$d', '$i', '$s', '$c','$id_usuario','$id_empresa')";
    $cadastra_teste = mysqli_query($conn, $result_teste);

    if ($cadastra_teste) {

        //            funcao mail
        
        
        


        $sql3 = mysqli_query($conn, "SELECT * FROM rh where id = '$id_empresa' ");
        $resultado3 = mysqli_fetch_array($sql3);

        $email_empresa = $resultado3['email'];

        email($maior,$email_empresa,$telefone_usuario,$nome_usuario,$email_usuario);

//        $mensagem = "Teste Feito por: nome: $nome_usuario \n Email: $email_usuario \n Dominancia: '$d',Influencia: '$i' ,Estabilidade: '$s' ,Cautela: '$c'";
//
//
//        $from = "carlos.tecnologo2015@gmail.com";
//
//        $to = $email_empresa;
//
//        $subject = "Teste Disc";
//
//        $message = $mensagem;
//
//        $headers = "De:" . $from;
//
//        mail($to, $subject, $message, $headers);



        echo"<script language='javascript' type='text/javascript'>alert('Teste enviado, obrigado!');window.location.href='../usuario.php'</script>";
    } else {

        echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel o envio do teste, tente fazer novamente mais tarde!');window.location.href='../usuario.php'</script>";
    }
} else {

    echo"<script language='javascript' type='text/javascript'>alert('Erro! Não foi possivel buscar seus dados para efetuar o envio do teste');window.location.href='../usuario.php'</script>";
}


  mysqli_close($conn);
?>


