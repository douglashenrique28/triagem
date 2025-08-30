<?php
$host = "localhost";
$user = "root";
$pass = "aluno";
$database = "sistema_triagem";

$coon = new mysqli ($host, $user, $pass,$database);
if ($coon->connect_error) {
    http_response_code (500);
    echo json_encode( ["error"=> $coon->"Falha na conexão"],JSON_UNESCAPED_UNICODE);
    exit();

}

?>