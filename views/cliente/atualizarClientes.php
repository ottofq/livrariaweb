<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css"/>
    <title>Atualização de Cliente</title>
</head>
<body>
<?php
function formatarData($data)
{
    return date('d/m/Y', $data);
}

session_start();
$cliente = $_SESSION['Cliente'];
?>

    <div class="container">
        <form action="../../controllers/controllerCliente.php" method="POST">

        <div class="form-group">
                <label>CPF</label>
                <input type="text" class="form-control" name="txtCPFCliente" value="<?php echo $cliente->cpf ?>">
            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtNomeCliente" value="<?php echo $cliente->nome ?>">
            </div>

            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" class="form-control" name="txtLogradouroCliente" value="<?php echo $cliente->logradouro ?>" >
            </div>

            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="txtCidadeCliente" value="<?php echo $cliente->cidade ?>" >
            </div>

            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" name="txtEstadoCliente" value="<?php echo $cliente->estado ?>" >
            </div>

            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control" name="txtCEPCliente" value="<?php echo $cliente->cep ?>" >
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="txtDataNascCliente" value="<?php echo $cliente->data_nascimento ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmailCliente" value="<?php echo $cliente->email ?>" >
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" name="txtSenhaCliente" value="<?php echo $cliente->senha ?>" >
            </div>

            <div class="form-group">
                <label>RG</label>
                <input type="text" class="form-control" name="txtRGCliente" value="<?php echo $cliente->rg ?>">
            </div>

            <input type="hidden" name="opcao" value="5">
            <input type="hidden" name="cpfCliente" value="<?php echo $cliente->cpf ?>">
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="exibirClientes.php"><button type="button" class="btn btn-secondary">Voltar</button></a>

        </form>
    </div>


</body>
</html>
