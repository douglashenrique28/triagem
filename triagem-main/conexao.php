<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "triagem";

$coon = new mysqli($host, $user, $pass,$database);
if ($coon->connect_error){
    http_response_code (500);
    echo json_encode(["error"=> "Falha na conexão"],JSON_UNESCAPED_UNICODE);
    exit();

}

?>