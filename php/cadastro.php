<?php

require 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];

$sql = "INSERT INTO profs(usuario, senha, email, matricula) VALUES ('$usuario', '$senha', '$email', '$matricula')";
$conn->query($sql);
echo 'Cadastro realizado com sucesso!'

?>