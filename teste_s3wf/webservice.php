<?php
$nome = $_REQUEST['nome'];
$database = new mysqli('localhost','root',"",'henrique-s3wf');

try{
    $sql = "select * from s3_tarefa where nome ='$nome'";
    $result = $database -> query($sql);

    echo json_encode($result -> fetch_assoc());
}
catch (Exception $e)
{
    echo $e -> getMessage();
}