<?php
include("conexao.php"); // Certifique-se de que não está incluindo o próprio arquivo


$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$verify = "SELECT * FROM reserva WHERE email = '$email'";
$result = mysqli_query($conn, $verify);
if (mysqli_num_rows($result) >0){

    echo"email ja cadastrado";
}

$sql = "INSERT INTO  reserva (nome, email, senha) value ('$nome', '$email' , '$senha')";

if ($conn->query($sql) === TRUE){

    echo "reserva feita com sucesso.";
} else {
    echo "erro ao cadastrar." . $conn->error;
}


?>