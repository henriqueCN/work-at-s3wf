<html>
<head>
<title>Formulário de Cadastro</title>
</head>
<style>
.container1{
	
	margin-top: 50px;
	margin-left: 550px;
}
</style>
<body>
<div class = "container1">
<form method = "post" action = "cadastro_taref.php">
<!--Criando um formulário para enviar informações para cadastrar-->
<h1>Nova Tarefa</h1>

Data Inicial: <input type = "date" name = "dataini" required> <br>
<br>
Hora Inicial: <input type = "time" name = "horaini" required> <br>
<br>
Data Final: <input type = "date" name = "datafini" required> <br>
<br>
Hora Final: <input type = "time" name = "horafini" required> <br>
<br>
Tamanho csv: <input type = "text" name = "tamcsv" required> <br>
<br>
Nome da Tarefa: <input type = "text" name = "nometaref" required> <br>
<br>
Download <input type = "text" name = "down" required> <br>
<br>
Ação <input type = "text" name = "acao" required> <br>
<br>
<input type = "submit" value = "Cadastrar Tarefa" name = "cadastro">
</form>
<!--Botão para ir logar-->
<a href = "tela_admin.php"><button>Voltar para admin</button></a>
</div>
</body>

</html>