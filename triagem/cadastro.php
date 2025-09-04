<?php
include "conexao.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$data_de_nascimento = $_POST["data_de_nascimento"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];

$sintomas = $_POST["sintomas"];
$inicio_dos_sintomas = $_POST["inicio_dos_sintomas"];
$doencas_pre_existentes = $_POST["doencas_pre_existentes"];
$uso_de_medicamentos = $_POST["uso_de_medicamentos"];
$alergias = $_POST["alergias"]; 

$pressao_arterial = $_POST["pressao_arterial"];
$temperatura = $_POST["temperatura"];
$frenquencia_cardiaca = $_POST["frenquencia_cardiaca"];
$saturacao = $_POST["saturacao"];

$observacoes = $_POST["observacoes"];

$sql = "INSERT INTO triagem (
    nome, idade, sexo, data_de_nascimento, cpf, telefone, endereco, 
    sintomas, inicio_dos_sintomas, doencas_pre_existentes, uso_de_medicamentos, alergias, 
    pressao_arterial, temperatura, frequencia_cardiaca, saturacao, observacoes
) VALUES (
    '$nome', '$idade', '$sexo', '$data_de_nascimento', '$cpf', '$telefone', '$endereco', 
    '$sintomas', '$inicio_dos_sintomas', '$doencas_pre_existentes', '$uso_de_medicamentos', '$alergias', 
    '$pressao_arterial', '$temperatura', '$frenquencia_cardiaca', '$saturacao', '$observacoes'
)";

if ($coon->query($sql) === TRUE) {
    echo json_encode(["success" => "Dados inseridos com sucesso."]);
} else {
    echo json_encode(["error" => "Erro ao inserir dados: " . $coon->error]);
}
?>

<?php
if ($conn->query($sql) === TRUE) {
    echo "<h2>Paciente Cadastrado com Sucesso</h2>";
    echo "<div class='paciente'></div>";
    echo "<b>Nome: </b> $nome <br>";
    echo "<b>Idade: </b> $idade <br>";
    echo "<b>Sexo: </b> $sexo <br>";
    echo "<b>Data de Nascimento: </b> $data_de_nascimento <br>";
    echo "<b>CPF: </b> $cpf <br>";
    echo "<b>Telefone: </b> $telefone <br>";
    echo "<b>Endereço: </b> $endereco <br>";
    echo "<b>Sintomas: </b> $sintomas <br>";
    echo "<b>Início dos Sintomas: </b> $inicio_dos_sintomas <br>";
    echo "<b>Doenças Preexistentes: </b> $doencas_pre_existentes <br>";
    echo "<b>Uso de Medicamentos: </b> $uso_de_medicamentos <br>";
    echo "<b>Alergias: </b> $alergias <br>";
    echo "<b>Pressao Arterial: </b> $pressao_arterial <br>";
    echo "<b>Temperatura: </b> $temperatura <br>";
    echo "<b>Frequencia Cardíaca: </b> $frequencia_cardiaca <br>";
    echo "<b>Saturacao: </b> $saturacao <br>";
    echo "<b>Observacoes: </b> $observacoes <br>";
} else {
    echo "<p>Erro ao cadastrar paciente: " . $conn->error . "</p>";
}
$conn->close();
?>

    