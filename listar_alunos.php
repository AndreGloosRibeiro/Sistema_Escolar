<?php
include("conexao.php");

$sql = "SELECT * FROM alunos";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Matrícula: " . $row["matricula"] . "<br>";
    }
} else {
    echo "Nenhum aluno cadastrado.";
}

$conexao->close();
?>
