<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <title>Cadastro Cliente</title>
</head>
<body>
    <div class="container">
        <form action="../../controllers/controllerCliente.php" method="POST">

            <div class="form-group">
                <label>CPF</label>
                <input type="text" onkeypress="$(this).mask('000.000.000-00')" class="form-control" name="txtCPFCliente" required>
            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtNomeCliente" required>
            </div>

            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" class="form-control" name="txtLogradouroCliente" required>
            </div>

            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="txtCidadeCliente" required>
            </div>

            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" name="txtEstadoCliente" required>
            </div>

            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control" name="txtCEPCliente" onkeypress="$(this).mask('00.000-000')" required>
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="txtDataNascCliente" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmailCliente" required>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" name="txtSenhaCliente" required>
            </div>

            <div class="form-group">
                <label>RG</label>
                <input type="text" class="form-control" name="txtRGCliente" required>
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
