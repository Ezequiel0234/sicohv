<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Dados para conexão com banco
$servername = "localhost";
$username = "root";
$password = "root";
$database = "professores";

// Criar conexão com o banco
$conn = new mysqli($servername, $username, $password, $database);

// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>