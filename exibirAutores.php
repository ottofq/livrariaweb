<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <script src="css/bootstrap/js/bootstrap.js"></script>
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
    <div class=\"container tabela\" align=\"center\">
        <table class=\"table table-bordered table-hover\" >
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nasc.</th>
            <th>Operação</th>
";
foreach ($autores as $autor) {
    echo "<tr>";
    echo "<td>" . $autor->autor_id . "</td>";
    echo "<td>" . $autor->nome . "</td>";
    echo "<td>" . $autor->email . "</td>";
    echo "<td>" . $autor->dt_nasc . "</td>";
    echo "<td><a  href=\"controlers/controlerAutor.php?opcao=3&id=" . $autor->autor_id . "\"><button class=\"btn btn-success btnExcluir\">Editar</button></a>";
    echo "<button data-toggle=\"modal\" data-target=\"#modalExcluir\" dat class=\"btn btn-danger\">Excluir</button></td>";
    echo "</tr>";
}
echo "</div>
        </table>";
?>

<!-- Modal -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Excluir Autor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3> Deseja excluir o Autor?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <a <?php echo "href=\"controlers/controlerAutor.php?opcao=4&id=" . $autor->autor_id . "\""; ?> ><button type="button" class="btn btn-danger">Excluir</button></a>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
