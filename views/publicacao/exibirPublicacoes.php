<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibir Publicaçoes</title>
</head>
<body>
<?php
require_once '../../model/publicacao.php';
session_start();
$publicacoes = $_SESSION['ListaPublicacoes'];

foreach ($publicacoes as $pub) {
    ?>
        <table border="1" width="50%" cellspacing="5">
        <tr>
            <td rowspan="5" align="center">
            <img width="200" height="200" src="../../imagens/book_<?php echo $pub->getISBN(); ?>.jpg" >
            </td>
        </tr>

        <tr align="left">
        <td><?php echo $pub->getTitulo(); ?></td>
        </tr>

        <tr>
        <td><?php echo $pub->getAutor(); ?></td>
        </tr>

        <tr>
        <td><?php echo $pub->getEditora(); ?></td>
        </tr>

        <tr>
            <td><a href="#"><img src="../../imagens/botao_comprar.png" alt=""></a></td>
        </tr>

        </table>

<?php }?>

</body>
</html>
