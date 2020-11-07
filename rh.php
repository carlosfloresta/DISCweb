<?php
     include('funcoes/session_rh.php');  
     error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DISC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/rh.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
</head>

<body>
    <nav class="menu">
        <a class="titulo2" style="font-family: 'Pacifico', cursive;" href="rh.php">Disc</a>
        <a class="botao" href="sair.php">Sair</a>
    </nav>

    <h1>Bem-Vindo, <?php echo $login_session;  ?>.</h1>
    <h2>Painel de Controle - RH</h2>
    <h2>Candidatos que já efetuaram o teste</h2>

    <div class="container">
        <form id="myForm" action="teste.php" method="post">
            <div class="header_wrap">
                <div class="num_rows">
                    <div class="form-group">
                        <!--		Show Numbers Of Rows 		-->
                        <select class="form-control" name="state" id="maxRows">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                            <option value="5000">Mostrar tudo</option>
                        </select>
                    </div>
                </div>

                <div class="tb_search">
                    <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                        placeholder="Pesquisar..." class="form-control">

                </div>


                <label style="color:#fff;font-size: 20px; margin-left: 10px;"> Filtros: </label>
                <input type="radio" id="todos" name="todos"><label style="color:#fff;font-size: 14px">Todos</label>
                <input type="radio" id="dominante" name="todos" value="dominante"><label
                    style="color:#fff;font-size: 14px">Dominante</label>
                <input type="radio" id="influente" name="todos" value="influente"><label
                    style="color:#fff;font-size: 14px">Influente</label>
                <input type="radio" id="estavel" name="todos" value="estavel"><label
                    style="color:#fff;font-size: 14px">Estável</label>
                <input type="radio" id="cauteloso" name="todos" value="cauteloso"><label
                    style="color:#fff;font-size: 14px">Cauteloso</label>
            </div>
            <table class="table table-striped table-class" id="table-id">
                <thead>

                    <script type="text/javascript">
                    window.onload = function() {

                        var ex1 = document.getElementById('dominante');

                        var ex2 = document.getElementById('influente');
                        var ex3 = document.getElementById('estavel');
                        var ex4 = document.getElementById('cauteloso');
                        var ex5 = document.getElementById('todos');
                        ex1.onclick = dominante;
                        ex2.onclick = influente;
                        ex3.onclick = estavel;
                        ex4.onclick = cauteloso;
                        ex5.onclick = reload;
                    }
                    function reload() {
                        window.location.reload();
                    }
                    function dominante() {
                        var count = $('.table').children('tbody').children('tr:first-child').children('td').length;
                        // Declare variables
                        var input, filter, table, tr, td, i;
                        input = document.getElementById("dominante");
                        var input_value = document.getElementById("dominante").value;
                        filter = input.value.toLowerCase();
                        if (input_value != '') {
                            table = document.getElementById("table-id");
                            tr = table.getElementsByTagName("tr");
                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 1; i < tr.length; i++) {

                                var flag = 0;
                                for (j = 0; j < count; j++) {
                                    td = tr[i].getElementsByTagName("span")[j];
                                    if (td) {

                                        var td_text = td.innerHTML;
                                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                            //var td_text = td.innerHTML;  
                                            //td.innerHTML = 'shaban';
                                            flag = 1;
                                        } else {
                                            //DO NOTHING
                                        }
                                    }
                                }
                                if (flag == 1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        } else {
                            //RESET TABLE
                            $('#maxRows').trigger('change');
                        }
                    }

                    function influente() {
                        var count = $('.table').children('tbody').children('tr:first-child').children('td').length;
                        // Declare variables
                        var input, filter, table, tr, td, i;
                        input = document.getElementById("influente");
                        var input_value = document.getElementById("influente").value;
                        filter = input.value.toLowerCase();
                        if (input_value != '') {
                            table = document.getElementById("table-id");
                            tr = table.getElementsByTagName("tr");
                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 1; i < tr.length; i++) {

                                var flag = 0;

                                for (j = 0; j < count; j++) {
                                    td = tr[i].getElementsByTagName("span")[j];
                                    if (td) {

                                        var td_text = td.innerHTML;
                                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                            //var td_text = td.innerHTML;  
                                            //td.innerHTML = 'shaban';
                                            flag = 1;
                                        } else {
                                            //DO NOTHING
                                        }
                                    }
                                }
                                if (flag == 1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        } else {
                            //RESET TABLE
                            $('#maxRows').trigger('change');
                        }
                    }

                    function estavel() {
                        var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

                        // Declare variables
                        var input, filter, table, tr, td, i;
                        input = document.getElementById("estavel");
                        var input_value = document.getElementById("estavel").value;
                        filter = input.value.toLowerCase();
                        if (input_value != '') {
                            table = document.getElementById("table-id");
                            tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 1; i < tr.length; i++) {

                                var flag = 0;

                                for (j = 0; j < count; j++) {
                                    td = tr[i].getElementsByTagName("span")[j];
                                    if (td) {

                                        var td_text = td.innerHTML;
                                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                            //var td_text = td.innerHTML;  
                                            //td.innerHTML = 'shaban';
                                            flag = 1;
                                        } else {
                                            //DO NOTHING
                                        }
                                    }
                                }
                                if (flag == 1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        } else {
                            //RESET TABLE
                            $('#maxRows').trigger('change');
                        }
                    }

                    function cauteloso() {
                        var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

                        // Declare variables
                        var input, filter, table, tr, td, i;
                        input = document.getElementById("cauteloso");
                        var input_value = document.getElementById("cauteloso").value;
                        filter = input.value.toLowerCase();
                        if (input_value != '') {
                            table = document.getElementById("table-id");
                            tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 1; i < tr.length; i++) {

                                var flag = 0;

                                for (j = 0; j < count; j++) {
                                    td = tr[i].getElementsByTagName("span")[j];
                                    if (td) {

                                        var td_text = td.innerHTML;
                                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                            //var td_text = td.innerHTML;  
                                            //td.innerHTML = 'shaban';
                                            flag = 1;
                                        } else {
                                            //DO NOTHING
                                        }
                                    }
                                }
                                if (flag == 1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        } else {
                            //RESET TABLE
                            $('#maxRows').trigger('change');
                        }
                    }
                    </script>
                    <tr>

                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Perfil</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody id="myUL">
                    <?php
      include('funcoes/buscacandidato.php');

      function mask($val, $mask) {
          $maskared = '';
          $k = 0;
          for ($i = 0; $i <= strlen($mask) - 1; $i++) {
              if ($mask[$i] == '#') {
                  if (isset($val[$k]))
                      $maskared .= $val[$k++];
              } else {
                  if (isset($mask[$i]))
                      $maskared .= $mask[$i];
              }
          }
          return $maskared;
      }

      while ($resultado = mysqli_fetch_array($sql2)) {
          ?>

                    <tr>

                        <th><?php echo $resultado['nome']; ?></th>
                        <td><?php echo $resultado['email']; ?></td>
                        <td><?php echo mask($resultado['telefone'], '(##) #####-####'); ?></td>
                        <td><?php
                      include_once("conexao.php");

                      $id = $resultado['id'];
                      $id_login = $_SESSION['usuarioId'];
                      $sql3 = mysqli_query($conn, "SELECT usuario.*, teste.* FROM usuario INNER JOIN teste ON usuario.id = teste.id_usuario INNER JOIN rh ON teste.id_empresa = rh.id where usuario.id = '$id' and rh.id_login = '$id_login' ORDER BY usuario.id DESC  ");
                      $resultado2 = mysqli_fetch_assoc($sql3);

                      $d = $resultado2['d'];
                      $i = $resultado2['i'];
                      $s = $resultado2['s'];
                      $c = $resultado2['c'];

//                 maior
                      if ($d > $i && $d > $s && $d > $c) {
                          $mensagem = 'Dominante';
                      } else if ($i > $s && $i > $c) {
                          $mensagem = 'Influente';
                      } else if ($s > $c) {
                          $mensagem = 'Estável';
                      } else {
                          $mensagem = 'Cauteloso';
                      }


                      if (($d <= $i && $d >= $s && $d >= $c) || ($d >= $i && $d <= $s && $d >= $c) || ($d >= $i && $d >= $s && $d <= $c)) {

                          $mensagem2 = 'Dominante';
                      } else if (($i <= $s && $i >= $d && $i >= $c) || ($i >= $s && $i <= $d && $i >= $c) || ($i >= $s && $i >= $d && $i <= $c)) {

                          $mensagem2 = 'Influente';
                      } else if (($s <= $i && $s >= $d && $s >= $c) || ($s >= $i && $s <= $d && $s >= $c) || ($s >= $i && $s >= $d && $s <= $c)) {

                          $mensagem2 = 'Estável';
                          $corfundo2 = '#667FCE';
                      } else {
                          $mensagem2 = 'Cauteloso';
                      }

                      echo $mensagem;
                      echo ' / ';
                      echo $mensagem2;
                      ?></td>


                        <td style="display:none"><span><?php echo $mensagem ?></span></td>

                        <td>


                            <a href="#" data-id="<?php echo $resultado['id']; ?>" id="btn_ver">Ver</a>
                            <span> | </span>
                            <a href="#" data-id="<?php echo $resultado['id']; ?>" id="btn_email">Enviar</a>
                            <span> | </span>
                            <a href="funcoes/imprimeteste.php?id=<?php echo $resultado['id']; ?>" id="btn_imprimir"
                                target="_blank">Imprimir</a>

                            <span> | </span>
                            <a href="#" data-id="<?php echo $resultado['id']; ?>" id="btn_excluir">Excluir</a>

                        </td>
                    </tr>
                    <?php } ?>
                <tbody>
            </table>
            <!--		Start Pagination -->
            <div class='pagination-container'>
                <nav>
                    <ul class="pagination">
                        <!--	Here the JS Function Will Add the Rows -->
                    </ul>
                </nav>
            </div>
            <div class="rows_count"> 11 de 20</div>
    </div> <!-- 		End of Container -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ver Teste</h4>
                </div>



                <div class="modal-body">



                </div>



            </div>
        </div>
    </div>


    <script>
    $('input#txt_consulta').quicksearch('table#tabela tbody tr');
    </script>

    <script>
    $(document).ready(function() {

        var conteudo = $('.modal-body');


        //btn ver

        $('.table').on("click", '#btn_ver', function() {
            var id = $(this).attr('data-id');

            $.post('funcoes/verteste.php', {
                acao: 'form_ver',
                id: id
            }, function(retorno) {

                $('#myModal').modal({

                    backdrop: 'static'
                });

                document.getElementById('myModalLabel').innerHTML = 'Ver Teste';
                conteudo.html(retorno);

            });

            return false;

        });

    });



    $(document).ready(function() {

        var conteudo = $('.modal-body');
        //btn email

        $('.table').on("click", '#btn_email', function() {
            var id = $(this).attr('data-id');

            $.post('funcoes/verteste.php', {
                acao: 'form_email',
                id: id
            }, function(retorno) {

                $('#myModal').modal({

                    backdrop: 'static'
                });

                document.getElementById('myModalLabel').innerHTML = 'Enviar Teste';
                conteudo.html(retorno);
            });

            return false;

        });

    });

    $(document).ready(function() {

        var conteudo = $('.modal-body');
        //btn excluir

        $('.table').on("click", '#btn_excluir', function() {
            var id = $(this).attr('data-id');

            $.post('funcoes/verteste.php', {
                acao: 'form_excluir',
                id: id
            }, function(retorno) {

                $('#myModal').modal({



                    backdrop: 'static'
                });

                document.getElementById('myModalLabel').innerHTML =
                    'Deseja Realmente Excluir este Teste?';
                conteudo.html(retorno);

            });

            return false;

        });

    });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/table.js" type="text/javascript"></script>

</body>
</html>