<?php

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/formulario.css" media="all" />
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="shortcut icon" href="img/if.jpeg">
    <title>SICOHV</title>
</head>
<body>
    <div class="row" id="logo">
        <a href="index.html"><img src="img/if.jpeg" width="200px"/></a>
    </div>
    <div class="row">
        <div class="form">
            <h2>LOGIN</h2>
            <form action="formulario.php" method="post">
                <input type="text" id="usuario" name="usuario" placeholder="Usuário">
                <input type="password" id="senha" name="senha" placeholder="Senha">
                <div id="botao">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>