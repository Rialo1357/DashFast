<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/login.css">
    <title>Dashfast - Login</title>
</head>
<body>
  <main class="login">
        <div class="main__left__login">
            <div class="image__left_login">
                <img class="image__login" src="../imagens/fundo_login.png" alt="">
            </div>
        </div> 
         <div class="login__container">
          <h1 class="login__title">Entrar</h1>
          <form action="../php/testeLogin.php" method="POST" class="login__form">
              <input class="login__input" type="text" placeholder="CPF" name="cpf" minlength="11" maxlength="11" pattern="[0-9]+$" required>
              <span class="login__input-border" ></span>
              <input class="login__input" type="password" placeholder="Senha" name="senha" minlength="8" maxlength="20" required>
              <span class="login__input-border" ></span>
              <input type="submit" name="submit" value="Login" class="login__submit">
            <?php
                if(isset($_SESSION["erro"]))
                {
                    echo "<p align='center' style='color: red; font-size: 15px'>".$_SESSION["erro"]."</p>";
                    unset($_SESSION["erro"]);
                }
            ?>
              <a class="login__reset" href="">Esqueci a senha</a>
              <a class="login__reset" href="registro.php"><p style="margin-top: 10%;">Cadastrar-se</a></p>
          </form>
         </div>
  </main>
</body>
</html>


