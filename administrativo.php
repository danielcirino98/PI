<?php

session_start();
if(!empty($_SESSION['id'])){// tirar o "!" para aparecer online
  echo "\n".$_SESSION['nome'].",<a style='color: green;'>\n Ativo</a> <br>";
  //echo "<a href='sair.php'>sair</a>";
 
 


}else{
 $_SESSION['msg'] = "<a style='color: red'>OFFline</a>";

}

//}else{
 // /$_SESSION['msg'] = "Área restrita";
 // header("Location: login.php");
//} 
//session_start();
// tirar o "!" para aparecer online
  // echo "O administrador\n".$_SESSION['nome'].", está  <a style='color: green;'>online</a> <br>";
   //echo "<a href='sair.php'>sair</a>";




//}else{
  // /$_SESSION['msg'] = "Área restrita";
  // header("Location: login.php");
//} 
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--<link rel="stylesheet" type="text/css" href="css/stilo.css" media="screen"/> -->
  <style>
    h1{
      margin: auto;
      text-align: center;
    }
  
  </style>
  <title>Área restrita</title>
</head>
<body>
  <h1>SISTEMA ADMINISTRATIVO</h1>
 <button style=" width: 300px; height: 200px; background-color: gray;"><a href="sair.php">Sair</a></button>
 <button id="user" style="width: 300px; height: 200px; background-color: gray;"><a href="cadastrar.php">Cadastrar usuario</a></button>
 <button id="userpes" style="width: 300px; height: 200px; background-color: gray;"><a href="pesquisarusuario.php">Pesquisar usuario</button>
 <button id="userAtualiza" style="width: 300px; height: 200px; background-color: gray;"><a href="Atualizarperfil.php">Atualizar Dados</button>
 <!-- <button id="imprimiruser">Usuario</button>-->
    
  







<div>
  <?php 
       

       $ativos = $conn = true;
        
       if(!$ativos == true){
          echo" Usuario\n".$_SESSION['id'].$_SESSION['nome'].$_SESSION['email'];
        
         
      }else{
         return null;      }
 
   ?>
</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      //  $("#content").click(function(){
      //  $("#divconteudo.php").load("#divconteudo")
      // });

      //  $("#user").click(function(){
      //  $("#atualizarperfil").load("#Atualizarperfil.php")
        
     //   });

</html>