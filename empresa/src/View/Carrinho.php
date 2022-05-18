<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "../src/Model/Connection.php" ?>
        <meta charset="UTF-8">
        <title>Cadastro De Vender</title>
        <style>
            #vendas{
                    width:35%;
                    background-color:#f5e6ab;
                }
            #salvar{
                background-color:#1ed14b;
            }
        </style>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="#">
            <fieldset id="vendas">
            <legend>Vendas</legend>
            <select name="moto">
              <?php 
                $sql="SELECT modelo,ano,placa FROM moto";
              $resultado=$conn->query($sql);
              $tabela=$resultado->fetchAll(PDO::FETCH_ASSOC);
              foreach($tabela as $linha){
                 echo "<option value='".$linha['placa']."'>".$linha['modelo']."</option>";


              } 


              ?>

            </select>
            <input type="text" name="comprador" placeholder="Comprador" required><br>
            <input type="numero" name="valor" placeholder="Valor" required><br>
            <input type="text" name="date" placeholder="Date" required><br>
            <input type="radio" name="pagamento" required>Crédito<br>
            <input type="radio" name="pagamento" value="Débito" required>Débito<br>
            <input type="radio" name="pagamento" value="Pix/Dinheiro" required>Pix/Dinheiro<br>
            <input type="radio" name="pagamento" value="Boleto" required>Boleto <br>
            <input type="submit" value="SalvarVenda" name="salvar" id="salvar">
        </fieldset>
        <?php
            if (isset($_POST['salvar'])){
                $moto =$_POST['moto'];
                $comprador =$_POST['comprador'];
                $valor =$_POST['valor'];
                $date =$_POST['date'];
                $pagamento =$_POST['pagamento'];
    
                echo"<br>".$moto;
                echo"<br>".$comprador;
                echo"<br>".$valor;
                echo"<br>".$date;
                echo"<br>".$pagamento;
            }
            $sql="INSERT INTO vender(valor,data_venda,fk_moto,fk_cliente)
        VALUE(:valor,:data_venda,:fk_moto,:fk_cliente)";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':valor',$valor,PDO::PARAM_STR);
$stmt->bindParam(':data_venda',$date,PDO::PARAM_INT);
$stmt->bindParam(':fk_moto',$moto,PDO::PARAM_STR);
$stmt->bindParam(':fk_cliente',$comprador,PDO::PARAM_STR);

$resultado=$stmt->execute();
        
        if(!$resultado){
            var_dump($stmt->errorInfo());
            exit;
        }else{
            echo $stmt->rowcount()."linhas inseridas";
        }   
        ?>
    </body>
</html>