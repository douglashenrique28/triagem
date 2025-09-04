<?php
$host = "localhost";
$user = "root";
$pass = "@Do70el31ji28";
$database = "sistema_triagem";

$coon = new mysqli ($host, $user, $pass,$database);
if ($coon->connect_error) {
    http_response_code (500);
   echo json_encode(["error" => "Falha na conexão: " . $coon->connect_error], JSON_UNESCAPED_UNICODE);
    exit();

}

?>