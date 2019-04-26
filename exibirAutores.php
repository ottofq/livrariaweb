<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <title>Exibir Autores</title>
</head>
<body>

    <?php
function formatarData($data)
{
    return date('d/m/Y', $data);
}
session_start();
$autores = $_SESSION['ListaAutores'];
echo "
    <div class=\"container\" align=\"center\">
        <table class=\"table table-bordered table-hover\">
            <th>ID</td>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nasc.</th>
            <th>Operação</th>
";
foreach ($autores as $autor) {
    echo " <tr>";
    echo "<td>" . $autor->autor_id . "</td>";
    echo "<td>" . $autor->nome . "</td>";
    echo "<td>" . $autor->email . "</td>";
    echo "<td>" . $autor->dt_nasc . "</td>";
    echo "<td><a href=\"controlers/controlerAutor.php?opcao=3&id=" . $autor->autor_id . "\"\><button class=\"btn btn-success\">Editar</button></a>";
    echo "<a href=\"controlers/controlerAutor.php?opcao=4&id=" . $autor->autor_id . "\"><button class=\"btn btn-danger\">Excluir</button></a></td>";
    echo "</tr>";
}
echo "</div>
        </table>";
?>
</body>
</html>
