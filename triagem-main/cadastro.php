<?php

include "conexao.php";
$nome = $_POST["nome"];
$idade = $_POST ["idade"];
$sexo = $_POST ["sexo"];
$data_de_nascimento = $_POST ["data_de_nascimento"]?? null;
$cpf = $_POST ["cpf"];
$telefone = $_POST ["telefone"];
$endereco = $_POST ["endereco"];

$sintomas = $_POST ["sintomas"];
$inicio_dos_sintomas = $_POST ["inicio_dos_sintomas"];
$doencas_pre_existentes = $_POST ["doencas_pre_existentes"];
$uso_de_medicamentos = $_POST ["uso_de_medicamentos"];
$alergias = $_POST ["alergias"];

$pressao_arterial = $_POST ["pressao_arterial"];
$temperatura = $_POST ["temperatura"];
$frenquencia_cardiaca = $_POST ["frenquencia_cardiaca"]?? null;
$saturacao = $_POST ["saturacao"];

$observacoes = $_POST ["observacoes"]?? null;

$sql = "INSERT INTO pacientes(nome, idade, sexo, data_nascimento, cpf, telefone, endereco, sintomas, 
inicio_dos_sintomas, doencas_pre_existentes, uso_de_medicamentos, alergias, pressao_arterial, temperatura, 
frequencia_cardiaca, saturacao, observacao)

VALUES('$nome', '$idade', '$sexo', '$data_de_nascimento', '$cpf',
'$telefone', '$endereco', '$sintomas', '$inicio_dos_sintomas', '$doencas_pre_existentes', '$uso_de_medicamentos',
'$alergias', '$pressao_arterial', '$temperatura', '$frenquencia_cardiaca', '$saturacao', '$observacoes')";

?>

<?php
        if($coon->query($sql) === TRUE){
            echo"<h2> Paciente Cadastrado com Sucesso </h2>";
            echo "<div class= 'paciente'> </div>";
            echo "<b> Nome: </b> $nome <br>";
            echo "<b> Idade: </b> $idade <br>";
            echo "<b> Sexo: </b> $sexo <br>";
            echo "<b> Data_de_nascimento: </b> $data_de_nascimento <br>";
            echo "<b> Cpf: </br> $cpf <br>";
            echo "<b> Telefone: </b> $telefone <br>";
            echo "<b> Endereco: </b> $endereco <br>";
            echo "<b> Sintomas: </b> $sintomas <br>";
            echo "<b> Incio_dos_Sintomas: </b> $inicio_dos_sintomas <br>";
            echo "<b> Uso_de_medicamentos: </b> $uso_de_medicamentos <br>";
            echo "<b> Alergias: </b> $alergias <br>";
            echo "<b> Pressao_arterial: </b> $pressao_arterial <br>";
            echo "<b> Temperatura: </b> $temperatura <br>";
            echo "<b> Frequencia_cardiaca: </b> $frequencia_cardiaca <br>";
            echo "<b> Saturação: </b> $saturacao <br>";
            echo "<b> Observacões: </b> $observacoes <br>";

        }else{
            echo "<p> Erro ao cadastrar paciente" .
            $coon -> error . "</p>";
        }
        $coon -> close ();
    ?>