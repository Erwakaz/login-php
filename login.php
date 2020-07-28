<?php
    include 'recebedor.php';
    require 'verificador.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <title>Login com php</title>
</head>
<body>
    <div class="container">
    <section id="login">
        <form action="verificador.php" method="post">
            <label>
                Login com php
            </label>
            <br>
            <br>
            <div class="inputs">
                <input type="text" name="usuario-login" placeholder="Digite seu nome"/>
                <input type="password" name="senha-login" placeholder="Digite sua senha"/>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </section>
    </div>
  
</body>
</html>