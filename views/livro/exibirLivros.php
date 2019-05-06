<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../css/estilo.css"/>
    <script src="../../css/bootstrap/js/bootstrap.js"></script>
    <title>Exibir Livros</title>
</head>
<body>

    <?php

session_start();
$livros = $_SESSION['ListaLivros'];
echo "
    <div class=\"container tabela\" align=\"center\">
        <table class=\"table table-bordered table-hover tabela-livro\" >
        <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Edição</th>
            <th>Ano de Publicação</th>
            <th>Descrição</th>
            <th>Operação</th>
        </tr>
";
foreach ($livros as $livro) {
    echo "<tr>";
    echo "<td>" . $livro->isbn . "</td>";
    echo "<td>" . $livro->titulo . "</td>";
    echo "<td>" . $livro->edicao_num . "</td>";
    echo "<td>" . $livro->ano_publicacao . "</td>";
    echo "<td>" . $livro->descricao . "</td>";
    echo "<td><a  href=\"../../controllers/controllerLivro.php?opcao=3&isbn=" . $livro->isbn . "\"><button class=\"btn btn-success btnSpc\">Editar</button></a>
    <a  href=\"../../controllers/controllerLivro.php?opcao=4&isbn=" . $livro->isbn . "\"><button class=\"btn btn-danger\">Excluir</button></a></td>";
    echo "</tr>";
}
echo "</div>
        </table>";
?>
  <a href="../../index.html"><button class="btn btn-secondary">Voltar</button></a>

</body>
</html>
