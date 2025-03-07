<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilocadastro.css"> 
	<title>Atualizar Dados</title>
</head>
<body>
	
<div id="atualizarperfil">
		<h3>Atualizar perfil</h3>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
		<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo">
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail">
			<label>Usuário: </label>
			<input type="usuario" name="usuario" placeholder="Digite seu usuario para logar">
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Escolha uma senha">//
			<label>Avatar: </label>
			<input  type="file" name="avatar" placeholder="Escolha uma imagem"><!-- ATUALIZA IMAGEM-->
			<label>Idade: </label>
			<input type="date" name="idade" placeholder="Digite sua idade"><!-- ATUALIZA IDADE-->
			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="Digite sua cidade"> <!-- ATUALIZA CIDADE-->
			<label>Bairro: </label>
			<input type="text" name="bairro" placeholder="Digite seu bairro"> <!-- ATUALIZA BAIRRO-->
			<label>Cep: </label>
			<input type="text" name="cep" placeholder="Digite seu cep"> <!-- ATUALIZA CEP-->
            <label>Celular: </label>
			<input type="text" name="celular" placeholder="Digite seu numero"><!-- ATUALIZA NUMERO DE CELULAR-->
            <label>Cpf: </label>
			<input type="text" name="cpf" placeholder="Digite seu cpf"><br> <!-- ATUALIZA CPF-->
            <label>Nick: </label>
			<input type="text" name="nick" placeholder="Digite seu apelido na comunidade"> <!-- ATUALIZA NICK-->
            <input type="submit" value="Atualizar dados">
		</form>
	   </div>

  <!--<div id="fechar1"><a href="administrativo.php" style="margin: 5px;" title="fechar">-
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
  <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
  <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
</svg></a></div> -->

</ul>

</div>
	
</body>
</html>
