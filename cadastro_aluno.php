<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];

    $sql = "INSERT INTO alunos (nome, matricula) VALUES ('$nome', '$matricula')";
    $resultado = $conexao->query($sql);

    if ($resultado) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar aluno: " . $conexao->error;
    }
}
?>

<form method="post" action="cadastro_aluno.php">
    Nome: <input type="text" name="nome"><br>
    Matrícula: <input type="text" name="matricula"><br>
    <input type="submit" value="Cadastrar">
</form>
