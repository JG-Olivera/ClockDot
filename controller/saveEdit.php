<?php
    include_once("../model/conexao.php");
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cnpj = $_POST['cnpj'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',email='$email',senha='$senha',cnpj='$cnpj'
        WHERE id=$id";
        $result = $conn->query($sqlInsert);
        print_r($result);
    }
    
    header('Location: ../view/func.php');

?>