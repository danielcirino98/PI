<?php

session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
   // $created = filter_input(INPUT_POST, 'created', FILTER_SANITIZE_STRING);
   // $avatar = filter_input(INPUT_POST, 'avatar', FILTER_SANITIZE_STRING);
   // $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
   // $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
  //  $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
  //  $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
   // $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
   // $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
  //  $nick = filter_input(INPUT_POST, 'nick', FILTER_SANITIZE_STRING);
    // Verifica se todos os campos foram preenchidos
    if (!empty($nome) && !empty($email) && !empty($usuario) && !empty($senha)){
        // Criptografa a senha
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);


        // Insere os dados no banco de dados
        $query = "INSERT INTO usuarios (nome, email, usuario, senha, created, modified, avatar, idade, cidade, bairro, cep, celular, cpf, nick ) VALUES ('$nome', '$email', '$usuario', '$senhaCriptografada', '$created', '$modified', '$avatar', '$idade', '$cidade', '$bairro', '$cep', '$celular', '$cpf', '$nick')";
        $resultado = mysqli_query($conn, $query);

        if ($resultado) {
            $_SESSION['msg'] = "Usuário cadastrado com sucesso!";
            header("Location: loginadm.php");
            exit();
        } else {
            $_SESSION['msg'] = "Erro ao cadastrar o usuário. Tente novamente mais tarde.";
            header("Location: cadastrar.php");
            exit();
        }
    } else {
        $_SESSION['msg'] = "Todos os campos são obrigatórios!";
        header("Location: cadastrar.php");
        exit();
    }
}


