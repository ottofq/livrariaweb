<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../css/estilo.css"/>
    <script src="../../css/bootstrap/js/bootstrap.js"></script>
    <title>Exibir Clientes</title>
</head>
<body>

    <?php
function formatarData($data)
{
    return date('d/m/Y', $data);
}
session_start();
$clientes = $_SESSION['ListaClientes'];
echo "
    <div class=\"container tabela\" align=\"center\">
        <table class=\"table table-bordered table-hover\" >
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Logradouro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Data Nascimento</th>
            <th>Email</th>
            <th>RG</th>
            <th>Operação</th>
        </tr>
";
foreach ($clientes as $cliente) {
    echo "<tr>";
    echo "<td>" . $cliente->cpf . "</td>";
    echo "<td>" . $cliente->nome . "</td>";
    echo "<td>" . $cliente->logradouro . "</td>";
    echo "<td>" . $cliente->cidade . "</td>";
    echo "<td>" . $cliente->estado . "</td>";
    echo "<td>" . $cliente->cep . "</td>";
    echo "<td>" . $cliente->data_nascimento . "</td>";
    echo "<td>" . $cliente->email . "</td>";
    echo "<td>" . $cliente->rg . "</td>";
    echo "<td><a  href=\"../../controllers/controllerCliente.php?opcao=3&cpf=" . $cliente->cpf . "\"><button class=\"btn btn-success btnSpc\">Editar</button></a>
    <a  href=\"../../controllers/controllerCliente.php?opcao=4&cpf=" . $cliente->cpf . "\"><button class=\"btn btn-danger\">Excluir</button></a></td>";
    echo "</tr>";
}
echo "</div>
        </table>";
?>
  <a href="../../index.html"><button class="btn btn-secondary">Voltar</button></a>

</body>
</html>
