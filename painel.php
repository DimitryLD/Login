<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <center>
        <h1>Bem-vindo ao seu painel de controle, <?php echo $_SESSION['nome']; ?>.</h1>
    </center>
</body>
</html>