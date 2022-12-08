<?php

require 'conexao.php';

$id           = isset($_POST['id'])           ? $_POST['id']           : 0;
$novo_usuario = isset($_POST['novo_usuario']) ? $_POST['novo_usuario'] : 0;
$senha        = isset($_POST['senha'])        ? $_POST['senha']        : 0;
$email        = isset($_POST['email'])        ? $_POST['email']        : 0;
$matricula    = isset($_POST['matricula'])    ? $_POST['matricula']    : 0;
$apagar       = isset($_POST['apagar'])       ? $_POST['apagar']       : 0;


if ($apagar) {
    $sql = "DELETE FROM `profs` WHERE id=?";
    $query = $conn->prepare($sql);
    $query->execute([$apagar]);
    echo 'Registro deletado com sucesso!';
} else {
    //$sql = "SELECT * FROM `profs` WHERE `id`=?"
    $sql = "UPDATE `profs` SET `usuario`=?,`senha`=?,`email`=?,`matricula`=? WHERE id=?";
    $query = $conn->prepare($sql);
    $query->execute([$novo_usuario, $senha, $email, $matricula, $id]);
    echo 'Registro atualizado com sucesso!';
}

include('admin.php')

?>