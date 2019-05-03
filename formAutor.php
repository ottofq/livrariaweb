<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css"/>
    <title>Cadastro Autor</title>
</head>
<body>
    <div class="container">
        <form action="controlers/controlerAutor.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtNomeAutor">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmailAutor">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="txtDataNascAutor">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <input type="hidden" name="opcao" value="1">
        </form>
    </div>
</body>
</html>
