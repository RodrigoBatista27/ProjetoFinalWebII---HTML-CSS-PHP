<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        #contato {
            width: 100%;
            background-color: #8559da;
        }

        #acesso {
            float: left;
            width: 45%;
            height: 120px;
            background-color: #8559da;
        }

        #endereco {
            padding-bottom: 40px;
            width: 100%;
            background-color: #8559da;
        }

        #salvar {
            margin-top: 5px;
        }

        article {
            width: 100%;
            height: 100%;
        }

        body {
            overflow: hidden;
        }
    </style>
    <meta charset="UTF-8">
    <title>Cadastro De Cliente</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form method="post" action="#" id="endereco">
        <fieldset id="endereco">
            <legend>Defina seus dados</legend>
            <input type="text" name="Login" placeholder="Login" required minlength="8"><br>
            <input type="text" name="Senha" placeholder="Senha" required minlength="8"><br>
        </fieldset>
        <fieldset id="contato">
            <legend>Contato</legend>
            <input type="text" name="Fone" placeholder="Fone" required minlength="8"><br>
            <input type="email" name="Email" placeholder="E-mail" required minlength="8"><br>
        </fieldset>
        <fieldset id="contato">
            <legend>Endereço para entrega</legend>
            <select name="estado"><br>
                <option hidden>Selecione um estado</option><br>
                <option value="RS">Rio Grande do Sul</option>
                <option value="SC">Santa Catarina</option>
                <option value="PR">Parana</option>
            </select><br>
            <input type="text" name="cidade" placeholder="Cidade" required minlength="2"><br>
            <input type="text" name="bairo" placeholder="Bairro" required minlength="2"><br>
            <input type="text" name="rua" placeholder="Rua" required minlength="2"><br>
            <input type="text" name="numero" placeholder="Numero" required minlength="2"><br>
        </fieldset>
        <input type="submit" value="Cadastrar cliente" name="salvar" id="salvar">

    </form>
    <?php
    if (isset($_POST['salvar'])) {
        $login       = $_POST['Login'];
        $password      = $_POST['Senha'];
        $sexo          = $_POST['sexo'];
        $estado     = $_POST['estado'];
        $cidade     = $_POST['cidade'];
        $bairro      = $_POST['bairo'];
        $rua        = $_POST['rua'];
        $numero     = $_POST['numero'];
        $fone      = $_POST['fone'];
        $email      = $_POST['email'];

        include 'Connection.php';
        $sql = "INSERT INTO cliente(cpf,nome,sexo,estado,cidade,bairro,rua,numero,fone,email,whatsApp)
        VALUE(:cpf,:nome,:sexo,:estado,:cidade,:bairro,:rua,:numero,:fone,:email,:whatsApp)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_STR);
        $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
        $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':rua', $rua, PDO::PARAM_STR);
        $stmt->bindParam(':numero', $numero, PDO::PARAM_INT);
        $stmt->bindParam(':fone', $fone, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $resultado = $stmt->execute();
    }
    ?>
</body>

</html>