<?php
/*Conectando ao BD:*/
require_once('login.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "henrique-s3wf";
$conn = mysqli_connect($servername, $username, $password, $dbname);

/*Buscando e autenticando usuario:*/
try{
$result = $conn->query("SELECT * FROM s3_login WHERE logi_email='".$_POST['email']."'AND logi_senha='".md5($_POST['senha'])."';");
if($result->num_rows > 0){
while($row = $result->fetch_assoc())
{
	header("Location: tela_admin.php");
}
}
else{
	echo "erro";
}
}
catch (Exception $e)
{
	 echo $e -> getMessage();
}
	



?>