<!DOCTYPE html>
<html lang="en">
<head>
<style>
    #contato{
        background-color: #8559da;
        padding-bottom: 500px;
    }

    #salvar {
        margin-top: 5px;
    }

    body{
            overflow: hidden;
        }
</style>
    <meta charset="UTF-8">
    <title>Entrada de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
    <fieldset id="contato">
        <legend>Entre com seus dados</legend>
        <input type="text" name="Login" placeholder="Login" required><br>
        <input type="text" name="Senha" placeholder="Senha" required><br>
        <input type="submit" value="Entrar" name="salvar" id="salvar">
    </form>
<?php
    if (isset($_POST['salvar'])){
		$login       =$_POST['Login']; 
		$Senha      =$_POST['Senha'];
    }
?>
</body>
</html>