<?php
$host = "localhost";
$user = "root";
$pass = "aluno";
$database = "reserva";

$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    http_response_code (500);
    echo json_encode(["error" => "Falaha na conexão"], JSON_UNESCAPED_UNICODE);
    exit ();
}

?>