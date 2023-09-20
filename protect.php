<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <?php
    
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION)){
            echo "
            <header>
                <nav class=\"cabeçalho\">
                    <a class=\"logo\">FP</a>
                    <ul class=\"nav-list\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"logout.php\">Logout</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </nav>
            </header>";
        }
    }

    if(!isset($_SESSION['id'])) {
        die("<center><h1>Você não pode acessar o painel se não estiver logado! </h1><p><a id=\"bright\" href=\"index.php\">Entrar</a></p></center>");
    }

    ?>
</body>
</html>