 <?php

include_once("conexao.php");
        $id = $_SESSION['usuarioId'];
        $sql2 = mysqli_query($conn, "SELECT usuario.id, usuario.nome, usuario.email, usuario.telefone FROM usuario INNER JOIN teste ON usuario.id = teste.id_usuario INNER JOIN rh ON teste.id_empresa = rh.id where rh.id_login = '$id' ORDER BY usuario.id DESC  ");

?>