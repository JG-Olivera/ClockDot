<?php
    include_once("../model/conexao.php");

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conn->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($rows = mysqli_fetch_assoc($result))
            {
                $nome = $rows['nome'];
                $email = $rows['email'];
                $senha = $rows['senha'];
                $cnpj = $rows['cnpj'];
            }
        }
        else
        {
            header('Location: func.php');
        }
    }
    else
    {
        header('Location: func.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="editarc/edit.css">
</head>
<body>

    <div class="box">
        <form action="../controller/saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cnpj" id="cnpj" class="inputUser" value=<?php echo $cnpj;?> required>
                    <label for="cnpj" class="labelInput">CNPJ</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">

                <br><br><br>

                <div class="inputBox">
                <a id="submit" href="func.php">Voltar</a>
                </div>

                <br>
               

            </fieldset>
        </form>
    </div>
</body>
</html>