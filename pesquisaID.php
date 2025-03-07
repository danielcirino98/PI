<?php
session_start();
include_once("conexao.php");

$btnPesquisaID = filter_input(INPUT_POST, 'btnPesquisaID', FILTER_SANITIZE_STRING);
if ($btnPesquisaID) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if (!empty($usuario) && !empty($senha)){
        $result_usuario = "SELECT id, nome, email, senha, avatar, cidade, bairro, cep, celular, cpf, nick FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if ($resultado_usuario) {
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if (password_verify($senha, $row_usuario['senha'])) {
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                $_SESSION['avatar'] = $row_usuario['avatar'];
                $_SESSION['cidade'] = $row_usuario['cidade'];
                $_SESSION['bairro'] = $row_usuario['bairro'];
                $_SESSION['cep'] = $row_usuario['cep'];
                $_SESSION['celular'] = $row_usuario['celular'];
                $_SESSION['cpf'] = $row_usuario['cpf'];
                $_SESSION['nick'] = $row_usuario['nick'];
                $_SESSION['keyacess'] = $row_usuario['keyacess'];

                // Não é uma boa prática armazenar a senha na sessão
                // $_SESSION['senha'] = $row_usuario['senha'];
                header("Location: resultadoID.php");
               // Não é uma boa prática armazenar a senha na sessã               //  $_SESSION['senha'] = $row_usuario['senh    
                exit(); // Termina a execução do script após o redirecionamento
             
                      
         
            
        } else {
            $_SESSION['msg'] = "Erro ao executar a consulta no banco de dados";
            header("Location: pesquisarusuario.php");
            exit();
        }
      
            } else {
                $_SESSION['msg'] = "Erro ao executar a consulta no banco de dados";
                header("Location: pesquisarusuaro.php");
                exit();
            }
    } else {
        $_SESSION['msg'] = "Login e senha não podem ser vazios!";
        header("Location: pesquisarusuario.php");
        exit();
    }
} else {
    $_SESSION['msg'] = "Acesso inválido!";
    header("Location: pesquisarusuario.php");
    exit();
}
