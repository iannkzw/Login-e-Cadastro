<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Painel de controle</h1>
            <hr>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($usuario as $cadastro): ?>
                    <tr>
                        <td><?php echo $cadastro['id']; ?> </td>
                        <td><?php echo $cadastro['nome']; ?> </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a class="btn btn-success" href="/SistLogin/?pagina=index">Sair</a>
        </div>
    </div>
</body>
</html>