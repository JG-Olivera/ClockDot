<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ligação com a fonte utilizada (Red Hat) --> 
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Realizando as ligações com o CSS --> 
    <link rel="stylesheet" href="./login/css/reset.css">
    <link rel="stylesheet" href="./login/css/colors.css">
    <link rel="stylesheet" href="./login/css/main.css">
    <link rel="stylesheet" href="./login/css/login-container.css">
    <link rel="stylesheet" href="./login/css/form-container.css">
    <link rel="stylesheet" href="./login/css/form.css">
    <link rel="stylesheet" href="./login/css/form-title.css">
    <link rel="stylesheet" href="./login/css/form-input-container.css">
    <link rel="stylesheet" href="./login/css/form-input.css">
    <link rel="stylesheet" href="./login/css/form-button.css">
    <link rel="stylesheet" href="./login/css/overlay-container.css">
    <link rel="stylesheet" href="./login/css/overlay.css">
    <link rel="stylesheet" href="./login/css/mobile-text.css">

    <!-- Realizando a ligação com o JavaScript --> 
    <script src="./login/js/login.js" defer></script>

    <title>Login ou Registre-se</title>
</head>
<body>
    <main>
        <div class="login-container" id="login-container">
            <!-- Os dois form dentro de um container --> 
            <div class="form-container">

                <!-- Form de Login --> 
                <form action="../controller/testLogin.php" method="POST" class="form form-login">

                    <!-- Imagem Logo ClockDot --> 
                    <img src="login/img/logo.png" alt="clock"><br>

                    <h2 class="form-text">Faça Login</h2> <br>
                    
                    <div class="form-input-container">
                        <input type="email" name = "email" class="form-input" placeholder="Email" required>
                        <input type="password" name = "senha" class="form-input" placeholder="Senha" required>
                    </div>
                    
                    <br>  
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                    <br>

                    <!-- Botão Logar --> 
                    <input type="submit" name= "submit" value="Entrar" class="form-button">
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                </form>

                


<!-- ------------------------------------------------------------------------------------------------ -->




                <!-- Form de cadastro -->
                <form  action="../controller/processa.php" method="POST" class="form form-register">

                    <h2 class="form-title">Criar Conta</h2>

                    <div class="form-input-container">

                        <input type="text" name="nome" class="form-input" placeholder="Nome" required>
                        <input type="email" name="email" class="form-input" placeholder="Email" required>
                        <input type="password" name="senha" class="form-input" placeholder="Senha" required>
                        <input type="number" name="cnpj" class="form-input" placeholder="CNPJ" required>

                    </div>

                    <!-- Botão Cadastrar --> 
                    <input type="submit" value="Cadastrar" class="form-button" >
                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>
            </div>



             <!-- Botão Entrar--> 
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <p class="form-text">Para entrar na nossa plataforma faça login com suas informações</p>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>

                <!-- Botão Cadastre-se--> 
                <div class="overlay">
                    <h2 class="form-title form-title-light">Olá Usuário!</h2>
                    <p class="form-text">Cadastre-se para começar a utilizar nossa plataforma</p>
                    <button class="form-button form-button-light" id="open-register">Cadastre-se</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>