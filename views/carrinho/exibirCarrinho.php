<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibir Carrinho</title>
</head>
<body>
    <div>
        <table border="1">
        <tr>
            <th>Item Nº</th>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Editora</th>
            <th>Valor</th>
            <th>Remover</th>
        </tr>
        <?php
require_once '../../model/publicacao.php';
session_start();
$carrinho = $_SESSION["Carrinho"];
$cont     = 1;
$soma     = 0;
if (!isset($_REQUEST["status"])) {
    foreach ($carrinho as $car) {
        echo "<tr>";
        echo "<td>" . $cont . "</td>";
        echo "<td>" . $car->getId() . "</td>";
        echo "<td>" . $car->getTitulo() . "</td>";
        echo "<td>" . $car->getEditora() . "</td>";
        echo "<td>" . $car->getPreco() . "</td>";
        echo '<td><a href="../../controllers/controllerCarrinho.php?opcao=2index=' . ($cont - 1) . '"><img src="../../imagens/remove.jpg"/></a></td>';
        echo "</tr>";
        $cont++;
        $soma += $car->getPreco();
    }
} elseif ((int) $_REQUEST["status"] === 1) {
    echo "<div>
            <p>Carrinho Vazio!!</p>
            <p><a href='../../controllers/controllerPublicacao.php?opcao=2'>Visualizar Publicações</a></p>
            </div>";
}
?>
    <tr align="right">
        <td colspan="5">Valor Total: R$<?php echo $soma ?></td>
    </tr>
        </table>
    </div>

    <div>
    <a href="../../controllers/controllerPublicacao.php?opcao=2">Continuar Comprando</a>
    </div>

    <div>
    <a href="../compra/finalizarCompra.php?total=<?php echo $soma ?>">
        <img src="../../imagens/finalizarCompra.png">
    </a>
    </div>

</body>
</html>
