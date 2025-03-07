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
    <form method="POST" action="validaadmin.php">
       
        <h3>Logar como administrador(a) <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
</svg></h3>
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
        <input type="text" name="usuario"><br>
        <label>Senha</label><br>
        <input type="password" name="senha"><br>
       <label>Chave de acesso</label><br>  
       <input type="text" name="keyacess" placeholder="Digite a sua chave de acesso"><br>
        <input type="submit" name="btnLogin2" value="Acessar"><br>  
        <!--<a href="cadastrar.php">Cadastrar-se</a><br> -->
     
        
      
    </form>
    </div>


    
</body>
</html>