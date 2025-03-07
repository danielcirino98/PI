
    <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<!--<link rel="stylesheet" type="text/css" href="css/estilocadastro.css"> --> 
		<title>DescomplicaIF- Cadastro</title>	
		<style>
			body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

#cadastroperfil {
    width: 90%;
    max-width: 400px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #c8d6ca;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
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

	   <div id="cadastroperfil">
		<h3>Atualizar perfil</h3>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
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
    
</body>
</html>