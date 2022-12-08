<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>SICOHV</title>
</head>
<body>
    <!--logo da página-->
    <div class="row">
        <div id="logo">
            <img src="img/if.png" width="200px">
        </div>
    </div>
    <!--registros-->
    <div class="row">

        <?php
        include('conexao.php');
        $sql = "SELECT * FROM profs";
        $result = $conn->query($sql);
        $registers = $result->fetchAll();

        ?>
        <!--
        <form method="post" action="alterar-banco.php">
            <p>Alterar:</p>
            <div class="col-50">
                <label>ID:</label><br>
                <label>Novo Usuario:</label><br>
                <label>Nova Senha:</label><br>
                <label>Novo Email:</label><br>
                <label>Nova Matrícula:</label><br>
            </div>
            <div class="col-50">
                <input type="number" name="id"><br>
                <input type="text" name="novo_usuario"><br>
                <input type="text" name="senha"><br>
                <input type="text" name="email"><br>
                <input type="text" name="matricula"><br>
            </div>
            <input type="submit">
        </form>-->
    </div>
</body>
</html>