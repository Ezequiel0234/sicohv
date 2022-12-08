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
    <div class="cabecalho">
        <div id="logo">
            <a href="index.html"><img src="img/if.png"></a>
        </div>
        <div id="portal">
            <h1>SICOHV</h1>
        </div>
    </div>

    <!--ações-->
    <div class="row">
        <div id="botoes">
            <div class="col-50">
                <button class="botao" id="alterar" onclick="exibirAlterar()">Alterar Registro</button>
            </div>
            <div class="col-50">
                <button class="botao" id="apagar" onclick="exibirApagar()">Apagar Registro</button>
            </div>
        </div>
    </div>
    <!--formulario-->
    <div class="row">
        <div id="formulario"></div>
    </div>
    <script>
        var alterar = 
            '<form method="post" action="admin-auth.php">' +
                '<p>Alterar:</p>' +
                '<div class="col-50">' +
                    '<label>Usuario:</label><br>' +
                    '<label>Novo Usuario:</label><br>' +
                    '<label>Nova Senha:</label><br>' +
                    '<label>Novo Email:</label><br>' +
                    '<label>Nova Matrícula:</label><br>' +
                '</div>' +
                '<div class="col-50">' +
                    '<input type="text" name="usuario"><br>' +
                    '<input type="text" name="novo_usuario"><br>' +
                    '<input type="text" name="senha"><br>' +
                    '<input type="text" name="email"><br>' +
                    '<input type="text" name="matricula"><br>' +
                '</div>' +
                '<input type="submit">' +
            '</form>'

        var apagar =
            '<form method="post" action="admin-auth.php">' +
                '<p>Deletar: </p>' +
                '<div class="col-25">' +
                    '<label>Usuario:</label>' +
                '</div>' +
                '<div class="col-75">' +
                    '<input type="text" name="apagar">' +
                '</div>' +
                '<input type="submit">' +
            '</form>'

        var formulario = document.getElementById('formulario')

        function exibirAlterar() {
            formulario.innerHTML = alterar
        }

        function exibirApagar() {
            formulario.innerHTML = apagar
        }
    </script>
</body>
</html>