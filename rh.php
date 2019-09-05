<?php
     include('funcoes/session_rh.php');
      
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DISC</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
         <link rel="stylesheet" href="css/rh.css">
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
 
 
 

    </head>
    <body>
        
         <nav>
            
            <a class="botao" href="sair.php">Sair</a>
           
            
            
        </nav>  
        
         <h1>Bem-Vindo, <?php echo $login_session;  ?>.</h1>
        
        <h2>Painel de Controle - RH</h2>
        
        
        <h2>Candidatos que já efetuaram o teste</h2>
        
        <section class="tabela">
        <div class="form-group input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
  <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
 </div>
        
            <div class="table-responsive">
        <table id="tabela" class="table table-hover">
  <thead>
    <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Opções</th>
      </tr>
  </thead>
  <tbody>
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
              <td>


                  <a href="#" data-id="<?php echo $resultado['id']; ?>"  id="btn_ver">Ver</a>
                  <span> | </span>
                  <a href="#"  data-id="<?php echo $resultado['id']; ?>" id="btn_email">Enviar</a>
                  <span> | </span>
                  <a href="funcoes/imprimeteste.php?id=<?php echo $resultado['id']; ?>"  id="btn_imprimir" target="_blank">Imprimir</a>
                  
                  <span> | </span>
                  <a href="#"  data-id="<?php echo $resultado['id']; ?>" id="btn_excluir">Excluir</a>

              </td>
          </tr>
<?php } ?>
      
  </tbody>
 </table>
       </div> 
   


</section>
        
        
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
    
    $(document).ready(function () {
    
    var conteudo = $('.modal-body');
    
    
   //btn ver
   
    $('.table').on("click", '#btn_ver', function () {
        var id = $(this).attr('data-id');

        $.post('funcoes/verteste.php', {acao: 'form_ver', id: id}, function (retorno) {

            $('#myModal').modal({

                backdrop: 'static'
            });

             document.getElementById('myModalLabel').innerHTML= 'Ver Teste';
            conteudo.html(retorno);



        });

        return false;

    });
    
    });
    
    
    
    $(document).ready(function () {
    
    var conteudo = $('.modal-body');
    
   
   //btn email
   
    $('.table').on("click", '#btn_email', function () {
        var id = $(this).attr('data-id');
        
        
          
        $.post('funcoes/verteste.php', {acao: 'form_email', id: id}, function (retorno) {

            $('#myModal').modal({
                
              

                backdrop: 'static'
            });

             document.getElementById('myModalLabel').innerHTML= 'Enviar Teste';
            conteudo.html(retorno);

          

        });

        return false;

    });
    
    });
    
     $(document).ready(function () {
    
    var conteudo = $('.modal-body');
    
   
   //btn excluir
   
    $('.table').on("click", '#btn_excluir', function () {
        var id = $(this).attr('data-id');
        
        
          
        $.post('funcoes/verteste.php', {acao: 'form_excluir', id: id}, function (retorno) {

            $('#myModal').modal({
                
              

                backdrop: 'static'
            });

             document.getElementById('myModalLabel').innerHTML= 'Deseja Realmente Excluir este Teste?';
            conteudo.html(retorno);

          

        });

        return false;

    });
    
    });
   

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


    </body>
</html>