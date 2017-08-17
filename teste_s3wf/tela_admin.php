<?php
/*Conectando com o BD*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "henrique-s3wf";
$conn = mysqli_connect($servername, $username, $password, $dbname);



try{ /*tratamento de erro*/

	
$sql = "SELECT * FROM s3_tarefa"; /*Pegando dados do BD*/
$result = $conn->query($sql);
if($result->num_rows > 0){
    $relat = $result->fetch_all(MYSQLI_ASSOC);
}
else{
    $relat = array();
}
}
catch (Exception $e)/*tratamento de erro*/
{
	 echo $e -> getMessage();
}
?>
<html>
<head>
<!--Biblioteca BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>

<body>
<!-- Criando Tabela de Tarefas -->
<div class = "container">
<center><h1>Tabela de Tarefas</h1><center>
<br>
<table class = "table table-hover">
    <tr><td class="bg-primary">Data Inicial</td><td class="bg-primary">Hora Inicial</td><td class="bg-primary">Data Final</td><td class="bg-primary">Hora Final</td><td class="bg-primary">Tamanho do csv</td><td class="bg-primary">Nome da tarefa</td><td class="bg-primary">Download</td><td class="bg-primary">Ação</td></tr>
    <?php foreach ($relat AS $f):?>
             <tr><td><?php echo $f['data_inicial']; ?></td><td><?php echo $f['hora_inicial']; ?></td><td><?php echo $f['data_final']; ?></td><td><?php echo $f['hora_final']; ?></td><td><?php echo $f['tamanho_csv']; ?></td><td><?php echo $f['nome_tarefa']; ?></td><td><?php echo $f['download']; ?></td><td><?php echo $f['acao']; ?></td></tr>
			 
<?php endforeach; ?>
</table>
<a href = "gerarcsv.php"><button>Gerar csv</button></a>
<a href = "nova_tarefa.php"><button>Nova tarefa</button></a>
</div>
</body>
</html>