<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>Cadastro Livro</title>
</head>
<body>
    <div class="container">
        <form action="../../controllers/controllerLivro.php" method="POST">
            <div class="form-group">
                <label>ISBN</label>
                <input type="text" class="form-control" name="txtISBNLivro">
            </div>

            <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control" name="txtTituloLivro">
            </div>

            <div class="form-group">
                <label>Edição</label>
                <input type="text" class="form-control" name="txtEdicaoLivro">
            </div>

            <div class="form-group">
                <label>Ano de Publicação</label>
                <input type="text" class="form-control" name="txtAnoLivro">
            </div>

            <div class="form-group">
                <label>Descrição do Livro</label>
                <textarea class="form-control" name="txtDescricaoLivro" rows="3"></textarea>
            </div>

            <div class="container">
                <button type="submit" class="btn btn-primary btnSpc">Cadastrar</button>
                <button type="reset" class="btn btn-secondary btnSpc">Limpar</button>
                <a href="../../index.html" =><button type="button" class="btn btn-secondary ">Voltar</button></a>
            </div>
            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
</body>
</html>
