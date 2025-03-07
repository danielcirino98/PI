<?php 
    session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilologin.css"> 
    <title>DescomplicaIF- login</title>
</head>



<body>

    <div id="form">
    <form method="POST" action="pesquisaID.php">
       
        <h3>Buscar usuário</h3>
    <?php
        if(isset($_SESSION['msg']))
        {
        echo ($_SESSION['msg']);
        unset ($_SESSION['msg']);
        }
    ?>
    <br><br>
        <label>Usuário</label><br>
        <input type="seach" name="usuario" placeholder="Digite o seu usuário"><br>
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Digite a senha"><br>
        <input type="submit" name="btnPesquisaID" value="Acessar"><br>
     
       
 

      
    </form>
    </div>


    
</body>
</html>