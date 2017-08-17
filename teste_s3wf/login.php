<html>
<head>
<title>Formulário de login</title>
</head>
<style>
.container1{
	
	margin-top: 200px;
	margin-left: 550px;
}
</style>
<body>
<!--Criando um formulário para enviar informações para autenticacao-->
<div class = "container1">
<form method = "post" action = "autenticacao.php">
<h1>Formulário de Login</h1>
E-Mail:  <input Type = "text" name = "email" required><br>
<br>
Senha:  <input Type = "password" name = "senha" required><br>
<br>
<input Type = "submit" name = "enviar" value = "Logar"><br>


</form>
<!--Botão para ir para cadastro-->
<a href = "form_cadastro.php"><button>Cadastrar-se</button></a>
</div>
</body>
</html>