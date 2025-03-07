<?php

session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $avatar = filter_input(INPUT_POST, 'avatar', FILTER_SANITIZE_STRING);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $nick = filter_input(INPUT_POST, 'nick', FILTER_SANITIZE_STRING);

    // Verifica se todos os campos foram preenchidos
    if (!empty($idade) && !empty($cidade) && !empty($bairro) && !empty($cep) && !empty($celular) && !empty($cpf) && !empty($nick)){
        // Criptografa a senha
       // $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);


        // Insere os dados no banco de dados
        $query = "INSERT INTO usuarios (avatar, idade, cidade, bairro, cep, celular, cpf, nick) VALUES ('$avatar', '$idade', '$cidade', '$bairro', '$cep', '$celular', '$cpf', '$nick')";
        $resultado = mysqli_query($conn, $query);

        if ($resultado) {
            $_SESSION['msg'] = "Atualizado!";
            header("Location: perfillog.php");
            exit();
        } else {
            $_SESSION['msg'] = "Erro ao cadastrar o usuário. Tente novamente mais tarde.";
            header("Location: perfil.php");
            exit();
        }
    } else {
        $_SESSION['msg'] = "Todos os campos são obrigatórios!";
        header("Location: perfil.php");
        exit();
    }
}


