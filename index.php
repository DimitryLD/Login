<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <li><a href="#">Login</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!--Login-->
    <div class="main-login">
        <div class="left-login">
            <img src="./assets/imgs/moço.svg" class="left-login-image" alt="animação">
        </div>
        <form action="" method="POST">
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" placeholder="Ex: email@email.com">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Ex: abc12345">
                    </div>
                    <button class="btn-login" name="btn" type="submit">Login</button>
                    <p>Ainda não possui cadastro ? <a id="bright" href="./cadastro.php">Cadastre-se</a></p>
                    <!--Código PHP Login-->
                    <?php
                    include('conexao.php');

                    if(isset($_POST['email'])||isset($_POST['senha'])){
                    
                        if(strlen($_POST['email'])==0){
                            echo "<p>Preencha seu E-Mail!</p>";
                        } else if(strlen($_POST['senha'])==0){
                            echo "<p>Preencha sua senha!</p>";
                        } else {
                            $email = $mysqli->real_escape_string($_POST['email']);
                            $senha = $mysqli->real_escape_string($_POST['senha']);
                        
                            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código mysql: " . $mysqli->error);
                        
                            $quantidade = $sql_query->num_rows;
                        
                            if($quantidade==1){
                                $usuario = $sql_query->fetch_assoc();
                            
                                if(!isset($_SESSION)){
                                    session_start();
                                }
                            
                                $_SESSION['id'] = $usuario['id']; 
                                $_SESSION['nome'] = $usuario['nome'];
                            
                                header("Location:painel.php");
                            
                            } else {
                                echo "<p>Erro! Email ou senha incorretos!</p>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>