<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #sobre {
            background-color: #8559da;
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <title>CadastroDeCusto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body id="sobre">
    <div class="row">
        <div class="col-md-4">
            <img src="img/download.jpg">
            <h1>10</h1>
        </div>
        <div class="col-md-4">
            <img src="img/download.jpg">
            <h1>10</h1>
        </div>
        <div class="col-md-4">
            <img src="img/download1.jpg">
            <br>10</br>
        </div>

        <?php
        $dg = new C_DataGrid("SELECT * FROM orders", "orderNumber", "orders");
        $dg->set_theme('bootstrap');
        $dg->display();
        ?>
    </div>
</body>

</html>