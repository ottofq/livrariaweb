<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <title>Cadastro Autor</title>
</head>
<body>
<?php
session_start();
$dados = $_SESSION['Autor'];
foreach ($dados as $autor) {
    $nome     = $autor->nome;
    $email    = $autor->email;
    $dataNasc = $autor->dt_nasc;
}
?>

    <div class="container">
        <form action="controlers/controlerAutor.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" <?php echo "value=\"$nome\"" ?> name="txtNomeAutor">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" <?php echo "value=\"$email\"" ?> name="txtEmailAutor">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" <?php echo "value=\"$dataNasc\"" ?> name="txtDataNascAutor">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <input type="hidden" name="opcao" value="1">
        </form>
    </div>
</body>
</html>
