<?php 
    session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilologin.css"> 
    <title>Administrativo</title>
</head>



<body>

    <div id="form">
    <form method="POST" action="validaacessadm.php">
       
        <h3>Logar como administrador(a)</h3>
        <img src="logos/logo.jpg">
    <?php
        if(isset($_SESSION['msg']))
        {
        echo ($_SESSION['msg']);
        unset ($_SESSION['msg']);
        }
    ?>
    <br><br>
        <label>Usuário</label><br>
        <input type="text" name="usuario" placeholder="Digite o seu usuário"><br>
        <label>Senha</label><br>
        <input type="password" name="senha" placeholder="Digite a sua senha"><br>
        <label>Chave de acesso</label><br>
        <input type="text" name="keyacess" placeholder="Digite a sua chave de acesso"><br>
        <input type="submit" name="btnLogin" value="Acessar"><br>  
        <!--<a href="cadastrar.php">Cadastrar-se</a><br> -->
     
        
      
    </form>
    </div>


    
</body>
</html>