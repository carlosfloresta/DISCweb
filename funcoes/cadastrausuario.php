<?php

session_start();
include_once("conexao.php");
$nome_usuario = mysqli_real_escape_string($conn, $_POST['nome_usuario']);
$email_usuario = mysqli_real_escape_string($conn, $_POST['email_usuario']);
$cnpj_usuario = mysqli_real_escape_string($conn, $_POST['cpf_usuario']);
$senha_usuario = mysqli_real_escape_string($conn, $_POST['senha_usuario']);
$telefone_usuario = mysqli_real_escape_string($conn, $_POST['telefone_usuario']);


$codigo_rh = mysqli_real_escape_string($conn, $_POST['codigo_acesso_rh']);
$senha_usuario = md5($senha_usuario);


$pegaEmail = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email_usuario'");
$resultado2 = mysqli_fetch_assoc($pegaEmail);


if (isset($resultado2)) {

    $nivel = $resultado2['nivel'];

    if ($nivel === '1') {
        $_SESSION['emailjaexiste'] = "";
        header("Location: ../index.php");
    } else if ($nivel === '2') {

        $_SESSION['emailoutrousu'] = "";
        header("Location: ../index.php");
    }
} else {

    $pegaCpf = mysqli_query($conn, "SELECT * FROM usuario WHERE cpf = '$cnpj_usuario'");
    $resultado3 = mysqli_fetch_assoc($pegaCpf);


    if (isset($resultado3)) {

        $_SESSION['cpfexiste'] = "";
        header("Location: ../index.php");
    } else {
        
          $pegaCodigo = mysqli_query($conn, "SELECT * FROM rh WHERE codigo_acesso = '$codigo_rh'");
    $resultado4 = mysqli_fetch_assoc($pegaCodigo);
        
        if (isset($resultado4)) {
            $empresa_usuario = $resultado4["id"];

        $result_login = "INSERT INTO login(email, senha, nivel) values('$email_usuario', '$senha_usuario', '1')";
        $resultado_login = mysqli_query($conn, $result_login);
        



        $id = mysqli_affected_rows($conn) > 0 ? mysqli_insert_id($conn) : 0;

        $result_usuario = "INSERT INTO usuario (nome, telefone, cpf,  email, senha, nivel, id_login, id_empresa) VALUES ('$nome_usuario','$telefone_usuario','$cnpj_usuario','$email_usuario','$senha_usuario','1','$id', '$empresa_usuario')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if (mysqli_affected_rows($conn) != 0) {

            $_SESSION['usuarioId'] = $id;
            $_SESSION['usuarioEmail'] = $email_usuario;
            $_SESSION['usuarioNiveisAcessoId'] = "1";
            header("Location: ../usuario.php");
        } else {
            header("Location: ../index.php");
        }
    }else{
        
         $_SESSION['codigonaoexiste'] = "";
        
        header("Location: ../index.php"); 
        
    }
    }
}
mysqli_close($conn);
?>

