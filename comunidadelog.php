<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0" >
    <link rel="stylesheet" type="text/css" href="css/stilo.css" media="screen"/> 
    <title>Descomplica IF</title>
    <link rel="icon" href="logos/logo1.png">
</head>
    
<body class="light-mode" onload="toggleMode()"> <!--Início do corpo HTMl-->
  <header>

       <div id="slide" style="border-style: groove; display: flex; margin: auto; padding: auto; background-color: #c8d6ca;">
        <img src="logos/logo.jpg" style="padding: auto; height: auto; align-items: center;">
      <!--  <button id="btn1" style="width: 5px; height: 5px; border-radius: 100%; "><a style="width: auto; padding: 1%;">?</a></button> --><!--botão para janela de atalhos-->
       <div id="conteudo666"></div>
   <!-- <button id="btnperfil2" style="width: 15px; height: 35px; margin: 1px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="GreenColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
     </svg>
      <button id="btnperfil" style="width: 5px; height: 5px; border-radius: 100%"><a href="prefil.php"></a></button>-->
   </button>
   <?php

session_start();
if(!empty($_SESSION['id'])){// tirar o "!" para aparecer online
    if(empty($_SESSION['id'])){// tirar o "!" para aparecer online
     //   echo "<a style='color: black;'></a>\n".$_SESSION['nome']."<a style='color: green;'>online</a>";
      //  echo "<a style='color: black;'></a>\n".$_SESSION['nick']."";
      //  echo "<a href='sair.php'>sair</a>";

    }
   // echo "ID:\n".$_SESSION['id'],"";
    echo "".$_SESSION['nome'], "\n";
      


}else{
 $_SESSION['msg'] = "<a style='color: red'>offline</a>";
 header("Location: erro.html");

}


//}else{
 // /$_SESSION['msg'] = "Área restrita";
 // header("Location: login.php");
//} 
//session_start();
// tirar o "!" para aparecer online
   
//   echo "ID:".$_SESSION['id']."<a style='color: green; >online</a> <br>";


   //echo "".$_SESSION['nick'];
   //echo "<a href='sair.php'>sair</a>";




//}else{
  // /$_SESSION['msg'] = "Área restrita";
  // header("Location: login.php");
//} 
?>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg>


        <div id="test" style="display: flex; width: auto; height: auto; margin: auto; padding: auto;"> <!--Ajuste de botões no início-->
            <ul style="align-items: center;"><li><img src="logos/logoif.jpg" style="border-radius: 50%; margin: auto; padding: auto; width: 50px; height: 50px;"><a style=" margin: auto;" href="https://portal.ifrn.edu.br/campus/santacruz/" title="Portal" target="_blank">Portal</a></li></ul>
            <ul><li><img src="logos/unnamed.png" style="border-radius: 50%; margin: auto; padding: auto; width: 50px; height: 50px;"><a style="margin: auto;" href="https://suap.ifrn.edu.br/accounts/login/?next=/" title="Suap" target="_blank">Suap</a></li></ul>   
            <ul><li><img src="logos/logo2.png" style="border-radius: 50%; margin: auto; padding: auto; width: 50px; height: 50px;"><a style="margin: auto;" href="https://portal.suap.ifrn.edu.br/tutoriais/" title="Tutoriais Oficiais" target="_blank">Tutoriais</a></li></ul>
         <!--   <ul><li><a onclick="toggleMode()" style="margin: auto; padding: auto; width: 50px; height: 50px;" href="#">&#9728;</a></li></ul> -->
    </header>
    <div class="slideshow-container">
      <div class="mySlides">
        <img src="imagens/im1.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>
    
      <div class="mySlides">
        <img src="imagens/im2.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>
    
      <div class="mySlides">
        <img src="imagens/im3.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>

      <div class="mySlides">
        <img src="imagens/im4.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>

      <div class="mySlides">
        <img src="imagens/im5.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>

      <div class="mySlides">
        <img src="imagens/im6.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>

      <div class="mySlides">
        <img src="imagens/im7.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>

      <div class="mySlides">
        <img src="imagens/im8.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>

      <div class="mySlides">
        <img src="imagens/im9.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div>
      
      <div class="mySlides">
        <img src="imagens/im10.jpeg" style="width: 836px; height: 370px; border-radius: 7%;">
      </div> <!-- FIM de slides-->
    
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      <h2>"A educação é a chave para abrir a porta dourada da liberdade" George Washington Carver</h2>
     
    </div>
      </div> <br>
      <!--<div id="goodnew" style="display: flex; margin: auto; padding: auto; background-color: purple;">
      <button id="news" style=" background-color: white; width: 85px; height:40px; margin: auto;  padding: auto; border-radius: 7%">Projeto!</button>
      <button id="newss" style=" background-color: white; width: 85px; height:40px; margin: auto;  padding: auto; border-radius: 7%">Novidade</button>
      </div>
      <div id="novidades">



      </div> -->

         <div id="divisao0">    
            <span> <!-- OBs botão e imagens separados do conteúdo do footer-->
               <div style=" display: grid; margin:15px; margin: auto; border-end-end-radius: 15px; border-end-start-radius: 15px;">
                <h2 style="color:black; text-align: center;">PDFS DISPONÍVEIS</h2>
                   <ul style="margin:auto aito; padding: auto; width: 93%;">
                         <div id="bloco1" onmouseover="btfoco()" onmouseleave="btdesfoco()" style="width: 250px; height: 360px; border-radius: 5%; padding: 50px; margin: auto; background-color:#c8d6ca; text-align: center;"><img src="logos/logo.jpg" style="width: 200px; height: 250px;"><a href="tutoriais/mm.pdf" target=_blank style="font-size: 20px; text-align: center; padding: 14px; margin: auto auto;">Tutorial Mulheres Mil 2023<br></a><a style=" padding: auto auto; margin: 50px;  color: black">Público Interno</a></div><br><br>
                      <div id="bloco2" onmouseover="bt2foco()" onmouseleave="bt2desfoco()" style="width: 250px; height: 360px; border-radius: 5%; padding: 50px; margin: auto; background-color:#c8d6ca; text-align: center;"><img src="logos/logo.jpg" style="width: 200px; height: 250px;"><a href="tutoriais/energife.pdf" target="_blank" style="font-size: 20px; text-align: center; padding: 14px; margin: auto auto;">Tutorial Energife 2023<br></a><a style=" padding: auto auto; margin: 50px;  color:black">Público Interno</a></div><br><br>
                         <div id="bloco3" onmouseover="bt3foco()" onmouseleave="bt3desfoco()" style="width: 250px; height: 360px; border-radius: 5%; padding: 50px; margin: auto; background-color:#c8d6ca; text-align: center;"><img src="logos/logo.jpg" style="align-items:center; width: 200px; height: 250px;"><a href="tutoriais/Expotec.pdf" target="_blank" style="font-size: 20px; text-align: center; padding: 14px; margin: auto auto;">Expotec 2023<br></a><a style=" padding: auto auto; margin: 50px;  color:black">Público Externo</a></div>
                    </ul>  
                </div>
            </span> 
        </div> <!--fIM DOS POSTS EM pdf-->
    
             
<!--<a href="p2.html" style="color: blue;">&rarr;</a> ir para segunda página--> <!--ATIVAR QUANDO NECESSÁRIO!-->
        

<div>    
         <footer> <!-- OBs botão e imagens separados do conteúdo do footer-->
            <br>
            <img  src="logos/logo.jpg" style="width: 150px; height: 150px;
                display: flex;
                border-radius: 50%;
                margin: auto;
                padding: auto;
                align-content: center;">
            <div class="container">
                <ul>
                <p>Informações</p>
                <li><a href="#" title="inicio">Início</a></li>
                <li><a href="form.html" title="feedback">feedback</a></li>
                <li><a href="mailto:cirinotech.dev@gmail.com" title=" Suporte">suporte</a></li>
                <li><a href="sobre.html" title="Sobre o projeto">Sobre o projeto</a></li>
               <!-- <li><a href="desenvolvedores.php" title="Desenvolvedores">Equipe</a></li>--> 
                <li><a href="sair.php" title="Deslogar">Deslogar</a></li> 
                </ul>
                <ul><p>Contatos</p>
                    <li><a href="https://www.instagram.com/descomplicaif/" title="instagram">instagram</a></li></ul>    
                
            </div>
            <p>Informações do website</p>
            <p style="font-size: 9px;">Versão de software: Alfa</p>
            <p style="font-size: 9px;">Ultima Atualização: 27/02/2025</p>
            <p>Próximas atualizações</p>
            <p style="font-size: 9px;">Novos tutoriais em pdfs</p>
            <p style="font-size: 9px;">Novas atualizações informativas</p>
            
  
          </footer><!--fim do rodapé-->
        </div>
        <script src="js/index.js"></script>      
       <!-- <p>Desenvolvido por:<a id="dev" onclick="sms()" style="color: rgb(99, 107, 86);" href="https://github.com/danielcirino98" style="width: 30px; height: 30px;"> Daniel cirino</a></p>
        <p id="p">&copy;Todos os direitos reservados: DescomplicaIF 2023</p>    -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("#btn2").click(function(){
        $("#conteudo666").load("divConteudo666.php")
        
        });
        $("#btnperfil2").click(function(){
        $("#conteudo666").load("divConteudo666.php")
        
        });
        $("#news").click(function(){
        $("#novidades").load("novidades.php")
        
        });
        $("#newss").click(function(){
        $("#novidades").load("novidadess.php")
        
        });
    </script>

<script src="js/index.js"></script>
</body>    
</html><!-- fim do HTML-->

