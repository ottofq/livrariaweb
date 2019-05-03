<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css"/>
    <title>Atualização de Autores</title>
</head>
<body>
<?php
function formatarData($data)
{
    return date('d/m/Y', $data);
}

session_start();
$autor = $_SESSION['Autor'];
?>

    <div class="container">
        <form action="controlers/controlerAutor.php" method="POST">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" value="<?php echo $autor->nome ?>" name="txtNomeAutor">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="<?php echo $autor->email ?>" name="txtEmailAutor">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" value="<?php echo $autor->dt_nasc ?>" name="txtDataNascAutor">
            </div>

            <input type="hidden" name="opcao" value="5">
            <input type="hidden" name="idAutor" value="<?php echo $autor->autor_id ?>">
            <button type="submit" class="btn btn-primary">Atualizar</button>

        </form>
    </div>
</body>
</html>
