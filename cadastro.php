<?php

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div>, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/padrao.css">

    <title>Cadastro</title>
 
</head>
<body>
    <img src="img/if.jpeg" alt="logo">
    <div class="box">
        <form action="cadastro.php" method="get">
          
            
            <br><br>
            <div class="inputBox">
                <input type="text" name="usuario" id="usuario"class="inputUser" required>
                <label for="name" class="labelInput">Nome de usuário</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha"class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</labe>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="matricula" id="matricula"class="inputUser" required>
                <label for="name" class="labelInput">Numero de matricula</label>
            </div>
            <br><br>
                <input type="submit" name="submit" id="submit">
            </div>
            <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>