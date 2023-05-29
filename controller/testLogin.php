<?php
    session_start();

    if (($ipv4 != 'Número IPv4 da rede') && ($ipv6 != 'Número IPv6 da rede')) {
        
        echo "ERRO DE REDE ;)";



        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
        {
            // Acessa
            include_once("../model/conexao.php");
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

            $result = $conn->query($sql);

            if(mysqli_num_rows($result) < 1)
            {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                $_SESSION['msg'] = "<p style='color:red;'>Erro ao realizar o login!</p>";
                header('Location: ../view/login.php');
            }
                else
                {

                    $obj = $result->fetch_object();

                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nome'] = $obj->nome;
                    header('Location: ../view/index.php');
                }
        }
    }
            else
            {
                // Não acessa
                $_SESSION['msg'] = "<p style='color:red;'>Erro ao realizar o login!</p>";
                header('Location: ../view/login.php');
            }
    
?>