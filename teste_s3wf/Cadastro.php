<?php
/*Conectando ao BD:*/
require_once('form_cadastro.php');
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
	$nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];
	
/*sql para inserir dados de um novo admin*/
	$sql = "INSERT INTO s3_login VALUES (null ,'".$nome."','".$email."','".$senha."');";
											
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
