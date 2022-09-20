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
    <!--Início da página-->
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
    <!--Horários da turma-->
    <div class="row">
        <?php

        // Dados para conexão com banco
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "turmas";

        // Criar conexão com o banco
        $conn = new mysqli($servername, $username, $password, $database);

        // Checar conexão
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Consulta sql:
        $sql = "SELECT hora,
            (SELECT materia FROM materias WHERE materias.id = ipi3.seg) AS seg,
            (SELECT materia FROM materias WHERE materias.id = ipi3.ter) AS ter,
            (SELECT materia FROM materias WHERE materias.id = ipi3.qua) AS qua,
            (SELECT materia FROM materias WHERE materias.id = ipi3.qui) AS qui,
            (SELECT materia FROM materias WHERE materias.id = ipi3.sex) AS sex,
            (SELECT materia FROM materias WHERE materias.id = ipi3.sab) AS sab
            FROM ipi3";

        $result = $conn->query($sql);

        // Encerrar conexão
        $conn->close();

        // Construção do html da tabela dos horários
        $table = '<table id="horarios"><tr>';
        $columns = ['hora', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab'];
        for ($i = 0; $i < 7; $i++) {
            $table .= '<th>' . $columns[$i];
        }
        $table .= '<tr><td colspan="7">MATUTINO<td></tr>';        
        while($row = $result->fetch_assoc()) {
            $table .= "<tr><td>" . $row["hora"] .
                "</td><td>" . $row["seg"] .
                "</td><td>" . $row["ter"] .
                "</td><td>" . $row["qua"] .
                "</td><td>" . $row["qui"] .
                "</td><td>" . $row["sex"] .
                "</td><td>" . $row["sab"] .
                "</td></tr>";
        }
        $table .= '</table>';

        echo $table;

        ?>
    </div>
</body>
</html>