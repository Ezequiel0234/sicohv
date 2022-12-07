<?php

require 'php/conexao.php';

$usuario      = isset($_POST['usuario'])      ? $_POST['usuario']      : 0;
$novo_usuario = isset($_POST['novo_usuario']) ? $_POST['novo_usuario'] : 0;
$senha        = isset($_POST['senha'])        ? $_POST['senha']        : 0;
$email        = isset($_POST['email'])        ? $_POST['email']        : 0;
$matricula    = isset($_POST['matricula'])    ? $_POST['matricula']    : 0;
$apagar       = isset($_POST['apagar'])       ? $_POST['apagar']       : 0;


if ($apagar) {
    $sql = "DELETE FROM `profs` WHERE usuario=?";
    $query = $conn->prepare($sql);
    $query->execute([$apagar]);
    echo 'Registro deletado com sucesso!';
} else {
    $sql = "UPDATE `profs` SET `usuario`=?,`senha`=?,`email`=?,`matricula`=? WHERE usuario=?";
    $query = $conn->prepare($sql);
    $query->execute([$novo_usuario, $senha, $email, $matricula, $usuario]);
    echo 'Registro atualizado com sucesso!';
}

include('admin.php')

?>