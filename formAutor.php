<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Autor</title>
</head>
<body>
    <div>
        <form action="controlers/controlerAutor.php" method="POST">
        Nome:<input type="text" name="txtNomeAutor"><br><br>
        Email:<input type="text" name="txtEmailAutor"><br><br>
        Data de Nascimento<input type="text" name="txtDataNascAutor"><br><br>
        <input type="submit" value="Enviar">

        <input type="hidden" name="opcao" value="1">
        </form>
    </div>
</body>
</html>
