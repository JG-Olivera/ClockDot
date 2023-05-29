<?php
    session_start();

    include_once("../model/conexao.php");

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://kit.fontawesome.com/caf63e55a9.js" crossorigin="anonymous"></script>

        <!-- ===== BOX ICONS ===== -->
        <link href='index.css' rel='stylesheet'>

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <link rel="stylesheet" href="cadastro/cadastrar.css">

        <title>Cadastro</title>
    </head>


    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                    <i class="fa-regular fa-clock" style="color: #ffffff;"></i>
                        <span class="nav__logo-name">ClockDot</span>
                    </a>

                    <div class="nav__list">
                        <a href="index.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Início</span>
                        </a>

                        <a href="#" class="nav__link active">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Cadastrar usuários</span>
                        </a>
                        
                        <a href="func.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Edição de usuários</span>
                        </a>
                    </div>
                </div>

                <a href="../controller/sair.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Sair</span>
                </a>
            </nav>
        </div>

        <br>
    


        <!--====== COMPONENTES ======-->

        <br><br>

        <form  action="../controller/cad.php" method="POST" class="form form-register">

        <h2 class="form-title">Cadastrar novo usuário</h2>

        <div class="form-input-container">

            <input type="text" name="nome" class="form-input" placeholder="Nome" required>
            <br>
            <br>
            <input type="email" name="email" class="form-input" placeholder="E-mail" required>
            <br>
            <br>
            <input type="password" name="senha" class="form-input" placeholder="Senha" required>
            <br>
            <br>
            <input type="number" name="cnpj" class="form-input" placeholder="CNPJ" required>
            <br>
            <br>
        </div>
  
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>

        <!-- Botão Cadastrar --> 
        <input type="submit" value="Cadastrar" class="form-button" >

        </form>





        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js">  </script>
        
    </body>
</html>