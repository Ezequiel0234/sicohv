<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Dados para conexão com banco
$servername = "localhost";
$username = "root";
$password = "";
$database = "sicohv";

// Criar conexão com o banco
$conn = new mysqli($servername, $username, $password, $database);

// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql pra selecionar o usuario e senha
$sql = "SELECT * FROM profs WHERE usuario = '$usuario' AND senha = '$senha';";

$result = $conn->query($sql);

// Verifica se tem uma ou mais linhas na matriz
if (mysqli_num_rows($result) > 0){
    include 'portal-professor.php';
}
else{
    die("Erro, seu usuário ou senha está incorreto!");
}

?>