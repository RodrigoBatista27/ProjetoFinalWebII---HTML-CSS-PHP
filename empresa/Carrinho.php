<!DOCTYPE html>
<html lang="pt-br">

<head>
<style>
        #sobre {
            background-color: #8559da;
            color: white;
            overflow: hidden;
        }

        #vendas {
            padding-bottom: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Cadastro De Vender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="sobre">
    <form method="post" action="#">
    <fieldset>
    <legend>Dados de pagamento</legend>
    <input type="text" name="Nome do Titular" placeholder="Nome do Titular" required minlength="2"><br>
            <input type="text" name="Numero do Cartão" placeholder="Numero" required minlength="12"><br>
    </fieldset>
    <fieldset id="vendas" class="row">
            <input class="col-1" type="text" name="vencimento" placeholder="Vencimento" required minlength="4"><br>
            <input class="col-1" type="text" name="cvv" placeholder="cvv" required minlength="3"><br>
        </fieldset>
        <input type="submit" value="Realizar Pagamento" name="salvar" id="Compras">

</body>

</html>