<?php
$servidor = "localhost";
$usuario = "root"; // Nome de usuário padrão do MySQL no XAMPP
$senha = ""; // Deixe em branco por padrão
$banco = "gestao_escolar";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
