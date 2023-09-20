<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FP Store</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <!--Navbar-->
    <header>
        <nav class="cabeçalho">
            <a class="logo">FP</a>
            <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="index.php">Login</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!--Cadastro-->
    <div class="main-login">
        <form action="" method="POST">
            <div class="left-login">
                <div class="card-login">
                    <h1>CADASTRO</h1>
                    <div class="textfield">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" placeholder="Ex: João Victor">
                    </div>
                    <div class="textfield">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" placeholder="Ex: email@email.com">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Ex: abc12345   ">
                    </div>
                    <button class="btn-login" name="btn" type="submit">Cadastrar</button>
                    <!--Código PHP-->
                    <?php
                    include("conexao.php");

                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    if(strlen($nome) == 0 || strlen($email) == 0 || strlen($senha) == 0){
                        echo "<p>Preencha todos os campos!</p>";
                    } else if(strlen($senha) < 8 || strlen($senha) > 16) {
                        echo "<p>A senha deve ter entre 8 e 16 caracteres</p>";
                    } else {
                        $inserir = "INSERT INTO usuarios(nome, email, senha) values('$nome','$email','$senha')";

                        $queryCadastro = mysqli_query($mysqli,$inserir);

                        header("Location:index.php");
                    }
                    ?>
                </div>
            </div>
        </form>
        <div class="right-login">
            <img src="./assets/imgs/moça2.svg" class="left-login-image" alt="Snorkeling">
        </div>
    </div>
</body>
</html>