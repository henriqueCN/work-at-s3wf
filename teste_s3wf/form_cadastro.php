<html>
<head>
<title>Formulário de Cadastro</title>
</head>
<style>
.container1{
	
	margin-top: 200px;
	margin-left: 550px;
}
</style>
<body>
<div class = "container1">
<form method = "post" action = "Cadastro.php">
<!--Criando um formulário para enviar informações para cadastrar-->
<h1>Formulário de Cadastro</h1>
Nome: <input type = "text" name = "nome" required> <br>
<br>
Email: <input type = "text" name = "email" required> <br>
<br>
Senha: <input type = "password" name = "senha" required> <br>
<br>
<input type = "submit" name = "cadastro">
</form>
<!--Botão para ir logar-->
<a href = "login.php"><button>Ir para o Login</button></a>
</div>
</body>

</html>