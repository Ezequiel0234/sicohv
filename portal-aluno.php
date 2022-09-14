<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="css/portal-aluno.css">
    <title>SICOHV</title>
</head>
<body>
    <div class="row">
        <div class="col-25" id="logo">
            <img src="img/if.jpeg" width="90px">
        </div>
        <div class="col-75">
            <h2 id="titulo">Portal do aluno</h2>
        </div>
    </div>
    <div class="row" id="turma">
        <h2>IPI - 3°</h2>
    </div>
    <div class="row">
        <?php

            // dados para conexão com banco
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "turmas";

            // criar conexão com o banco
            $conn = new mysqli($servername, $username, $password);

            // checar conexão
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

        ?>
        <table>
            <tr>
                <th>hora</th>
                <th>seg</th>
                <th>ter</th>
                <th>qua</th>
                <th>qui</th>
                <th>sex</th>
                <th>sab</th>
            </tr>
        </table>
    </div>
</body>
</html>