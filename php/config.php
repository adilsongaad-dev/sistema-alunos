<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_alunos";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("falha na conexão: " . $conn->connect_erro);
}

$conn->set_charset("utf8mb4");