<?php
/*Conectando ao BD:*/
require_once('nova_tarefa.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "henrique-s3wf";
$conn = mysqli_connect($servername, $username, $password, $dbname);

/*Caso haja algum erro de conexão, a seguinte mensagem será exibida*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try{   /*tratamento de erro*/

/*Caso o botão cadastrar seja clicado:*/
if(isset($_POST['cadastro'])){
	
/*Atribuindo valor para as variaves de acordo com o furmulário de cadastro*/
	$dataini = $_POST['dataini'];
    $horaini = $_POST['horaini'];
    $datafini = $_POST['datafini'];
	$horafini = $_POST['horafini'];
    $tamanhocsv = $_POST['tamcsv'];
    $nome = $_POST['nometaref'];
	$down = $_POST['down'];
    $acao = $_POST['acao'];
    
	
/*sql para inserir uma nova tarefa*/
	$sql = "INSERT INTO s3_tarefa VALUES (null ,'".$dataini.
	"','".$horaini.
	"','".$datafini.
	"','".$horafini.
	"','".$tamanhocsv.
	"','".$nome.
	"','".$down.
	"','".$acao."');";
											
/*Se o comando sql estiver certo... */
if ($conn->query($sql) === TRUE) {
    echo "Funcionou";
}
/*Se o comando sql estiver errado... */
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
catch (Exception $e)/*tratamento de erro*/
{
	 echo $e -> getMessage();
}
?>