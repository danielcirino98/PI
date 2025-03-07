<?php

session_start();
if(!empty($_SESSION['id'])){// tirar o "!" para aparecer online
    if(empty($_SESSION['usuario'])){// tirar o "!" para aparecer online
     //   echo "<a style='color: black;'></a>\n".$_SESSION['nome']."<a style='color: green;'>online</a>";
      //  echo "<a style='color: black;'></a>\n".$_SESSION['nick']."";
      //  echo "<a href='sair.php'>sair</a>";
    

 

    }
      


}else{
 $_SESSION['msg'] = "<a style='color: red'>offline</a>";

}


echo "ID:".$_SESSION['id'],"";
echo "Nome\n".$_SESSION['nome'];
echo "Usuario:\n".$_SESSION['usuario'],"\n";
echo "Email:\n".$_SESSION['email'];
echo "Cidade:\n".$_SESSION['cidade'];
echo "Bairro:\n".$_SESSION['bairro'];
echo "cep:\n".$_SESSION['cep'];

