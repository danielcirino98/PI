<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0" >
    <link rel="stylesheet" type="text/css" href="css/stilo.css" media="screen"/> 
    <title>Descomplica IF</title>
    <link rel="icon" href="logos/logo1.png">
    
<body class="light-mode" onloadstart="alertlogin()" onload="toggleMode()"> <!--Início do corpo HTMl-->
    <header>
        <div id="slide" style="border-style: groove; display: flex; margin: auto; padding: auto; background-color: #c8d6ca;">
        <img src="logos/logo.jpg" style="padding: auto; height: auto; align-items: center;">
        <button id="btn1" style="width: 5px; height: 5px; border-radius: 100%; "><a style="width: auto; padding: 1%;">?</a></button> <!--botão para janela de atalhos-->
        <div id="conteudo999"></div>
        <div id="test" style="display: flex; width: auto; height: auto; margin: auto; padding: auto;"> <!--Ajuste de botões no início-->
            <ul style="align-items: center;"><li><img src="logos/logoif.jpg" style="border-radius: 50%; margin: auto; padding: auto; width: 50px; height: 50px;"><a style=" margin: auto;" href="https://portal.ifrn.edu.br/campus/santacruz/" title="Portal" target="_blank">Portal</a></li></ul>
            <ul><li><img src="logos/unnamed.png" style="border-radius: 50%; margin: auto; padding: auto; width: 50px; height: 50px;"><a style="margin: auto;" href="https://suap.ifrn.edu.br/accounts/login/?next=/" title="Suap" target="_blank">Suap</a></li></ul>   
            <ul><li><img src="logos/logo2.png" style="border-radius: 50%; margin: auto; padding: auto; width: 50px; height: 50px;"><a style="margin: auto;" href="https://portal.suap.ifrn.edu.br/tutoriais/" title="Tutoriais Oficiais" target="_blank">Tutoriais</a></li></ul>
            <!--   <ul><li><a onclick="toggleMode()" style="margin: auto; padding: auto; width: 50px; height: 50px;" href="#">&#9728;</a></li></ul> -->
        </header> 
        <!-- <div id="divisao0">    
            <span> OBs botão e imagens separados do conteúdo do footer
               <div style=" display: grid; margin:15px; margin: auto; border-end-end-radius: 15px; border-end-start-radius: 15px;">
                <h2 style="color:black; text-align: center;">PDFS DISPONÍVEIS</h2>
                   <ul style="margin:auto aito; padding: auto; width: 93%;">
                         <div id="bloco1" onmouseover="btfoco()" onmouseleave="btdesfoco()" onfocus="sestrela()" style="width: 250px; height: 360px; border-radius: 5%; padding: 50px; margin: auto; background-color:#c8d6ca; text-align: center;"><img src="logos/logo.jpg" style="width: 200px; height: 250px;"><a href="https://drive.google.com/file/d/1u0GEASMMBGMbWWHllHXLx9lee8H6WWtv/view?usp=drive_link" target=_blank style="font-size: 20px; text-align: center; padding: 14px; margin: auto auto;">Tutorial Mulheres Mil 2023<br></a><a style=" padding: auto auto; margin: 50px;  color: black">Público Externo</a></div><br><br>
                         <div id="bloco2" onmouseover="bt2foco()" onmouseleave="bt2desfoco()" style="width: 250px; height: 360px; border-radius: 5%; padding: 50px; margin: auto; background-color:#c8d6ca; text-align: center;"><img src="logos/logo.jpg" style="width: 200px; height: 250px;"><a href="https://drive.google.com/file/d/1Y3rWYYY9qNa0D9eFgHQg4gR1NpVofYUO/view?usp=drive_link" target="_blank" style="font-size: 20px; text-align: center; padding: 14px; margin: auto auto;">Tutorial Energife 2023<br></a><a style=" padding: auto auto; margin: 50px;  color:black">Público Externo</a></div><br><br>
                         <div id="bloco3" onmouseover="bt3foco()" onmouseleave="bt3desfoco()" style="width: 250px; height: 360px; border-radius: 5%; padding: 50px; margin: auto; background-color:#c8d6ca; text-align: center;"><img src="logos/logo.jpg" style="align-items:center; width: 200px; height: 250px;"><a href="tutoriais/Expotec.pdf" target="_blank" style="font-size: 20px; text-align: center; padding: 14px; margin: auto auto;">Expotec 2023<br></a><a style=" padding: auto auto; margin: 50px;  color:black">Público Externo</a></div>
                    </ul>  
                </div>
            </span> 
        </div> -->

             
<!--<a href="p2.html" style="color: blue;">&rarr;</a> ir para segunda página--> <!--ATIVAR QUANDO NECESSÁRIO!-->
     <h1 style="color: red;">Faça login para acessar os conteúdos!<h1>   

<!-- <div>    
         <footer>  OBs botão e imagens separados do conteúdo do footer-->
   <!--         <br>
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
                <li><a href="desenvolvedores.php" title="Desenvolvedores">Equipe</a></li> 

                </ul>
                <ul><p>Contatos</p>
                    <li><a href="https://www.instagram.com/descomplicaif/" title="instagram">instagram</a></li></ul>    
                
            </div>

          </footer> fim do rodapé-->
      <!--  </div> -->   
        <p>Desenvolvido por:<a id="dev" onclick="sms()" style="color: rgb(99, 107, 86);" href="https://github.com/danielcirino98" style="width: 30px; height: 30px;"> Daniel cirino</a></p>
        <p id="p">&copy;Todos os direitos reservados: DescomplicaIF 2023</p>   
        <p>Versão de software: Alfa</p>
        <p>Atualizado: 27/02/2025</p>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("#btn1").click(function(){
        $("#conteudo999").load("divConteudo999.php")
        
        });
    </script>
    <script src="js/index.js"></script>

</body>    
</html><!-- fim do HTML-->

