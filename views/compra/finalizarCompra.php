<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finalizar Compra</title>
</head>
<body>
    <?php
$total = (int) $_REQUEST["total"];
?>

    <form action="../../boleto/meuboleto.php" method="POST">
        Nome:<input type="text" name=txtNome><br>
        CPF:<input type="text" name=txtCPF><br>
        Endereço:<input type="text" name=txtEndereco><br>
        Cidade:<input type="text" name=txtCidade><br>
        Estado:<input type="text" name=txtEstado><br>
        CEP:<input type="text" name=txtCEP><br>
        <input type="hidden" name="total" value=<?php echo $total ?> >
        <input type="submit" value="Pagar">
    </form>
    <h3>Valor Total:<?php echo $total ?></h3>

</body>
</html>
