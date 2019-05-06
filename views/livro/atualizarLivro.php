<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css"/>
    <title>Atualização de Livros</title>
</head>
<body>
<?php

session_start();
$livro = $_SESSION['Livro'];
?>

    <div class="container">
        <form action="../../controllers/controllerLivro.php" method="POST">

            <div class="form-group">
                <label>Titulo</label>
                <input type="text" class="form-control" value="<?php echo $livro->titulo ?>" name="txtTituloLivro">
            </div>

            <div class="form-group">
                <label>Edição</label>
                <input type="text" class="form-control" value="<?php echo $livro->edicao_num ?>" name="txtEdicaoLivro">
            </div>

            <div class="form-group">
                <label>Ano de Publicação</label>
                <input type="text" class="form-control" value="<?php echo $livro->ano_publicacao ?>" name="txtAnoLivro">
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" name="txtDescricaoLivro" rows="2" ><?php echo $livro->descricao ?></textarea>
            </div>

            <input type="hidden" name="opcao" value="5">
            <input type="hidden" name="isbnLivro" value="<?php echo $livro->isbn ?>">
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="exibirLivros.php"><button type="button" class="btn btn-secondary">Voltar</button></a>

        </form>
    </div>


</body>
</html>
