<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <table border=\"1\">
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
    echo "<td><a href=\"controlers/controlerAutor.php?opcao=3&id=" . $autor->autor_id . "\"\>Alterar </a>";
    echo "<a href=\"controlers/controlerAutor.php?opcao=4&id=" . $autor->autor_id . "\">Excluir </a></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
