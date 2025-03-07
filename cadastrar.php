<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<!--<link rel="stylesheet" type="text/css" href="css/estilocadastro.css"> --> 
		<title>Cirinotech - Cadastro</title>	
		<style>
			body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

h1{
	text-align: center;
	margin: auto;
}

p{
	color: red;
}

#formcadastro {
    width: 95%;
    height: 500px;
    max-width: 400px;
    padding: auto;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #c8d6ca;
}

label {
    display: block;
    margin-bottom: 7px;
}

input {
    width: 100%;
    padding: 5px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

img{

  display: flex;
  border-radius: 50%;
  border-style: groove;
  border-color: purple;
  margin: auto;
  padding: auto;
  align-content: center;
  width: 100px;
  height: 100px;


} 

		</style>	
	</head>
	<body>

	   <div id="formcadastro">
		<h3>Cadastro</h3>
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
           <!-- <input  type="file" name="avatar" placeholder="Escolha uma imagem">
			<label>Idade: </label>
			<input type="date" name="idade" placeholder="Digite sua idade">
			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="Digite sua cidade">
			<label>Bairro: </label>
			<input type="text" name="bairro" placeholder="Digite seu bairro">
			<label>Cep: </label>
			<input type="text" name="cep" placeholder="Digite seu cep">
            <label>Celular: </label>
			<input type="text" name="celular" placeholder="Digite seu numero">
            <label>Cpf: </label>
			<input type="text" name="cpf" placeholder="Digite seu cpf">
            <label>Nick: </label>
			<input type="text" name="nick" placeholder="Digite seu apelido na comunidade">-->
			<input type="submit" value="Cadastrar">
		</form>
		<p>Anote suas informações para não ter problemas de accesso posteriomente!</p>
	   </div>
		<!--<script src="text/javascript">
              


		</script>-->
	</body>
</html>