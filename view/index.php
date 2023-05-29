<?php
    session_start();
    $_SESSION['id'] = 'id';


    include_once("../model/conexaor.php");
    include_once("../model/conexao.php");

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
    
    $logado = $_SESSION['nome'];

    
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

        <title>Início</title>
    </head>


    <?php
        echo "<h2>Bem vindo $logado</h2>";
    ?>


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
                        <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Início</span>
                        </a>

                        <a href="cadastrar.php" class="nav__link">
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
        
        <!--===== RELÓGIO =====-->
        <div class="container">
            <div class="clock">
            <div class="time"></div>
            <div class="date"></div>
        </div>

        <!--====== COMPONENTES ======-->

        <br><br>
        
        
         <!--===== Botão =====-->

         <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <a class="button" style="color:white"  id ="btn" href="../controller/registrar.php" class="reg">Registrar Ponto</a>
        

        <style>
        .button {
        background-color: #00772e;
        color: white;   
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 22px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        font-family: Sans-serif;
        }

        .button:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .button:active {
        background-color: #3e8e41;
        transform: translateY(4px);
        }
        
        </style>




        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js">  </script>

        <!--===== RELÓGIO =====-->
        <script>

            function updateTime() {
                var now = new Date();
                var options = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
                var time = now.toLocaleTimeString([], options);
                
                options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                var date = now.toLocaleDateString('pt-BR', options);
                
                document.querySelector('.time').textContent = time;
                document.querySelector('.date').textContent = date;
            }   
        
            setInterval(updateTime, 1000); // Atualiza a cada segundo
        
        </script>
        
    </body>
</html>