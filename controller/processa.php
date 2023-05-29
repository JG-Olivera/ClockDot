<?php
session_start();
include_once("../model/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_UNSAFE_RAW);


$result_usuario = "INSERT INTO usuarios (nome, email, senha, cnpj) VALUES ('$nome', '$email', '$senha', '$cnpj')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
	header("Location: ../view/login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>O usuário não foi cadastrado!</p>";
	header("Location: ../view/login.php");
}
