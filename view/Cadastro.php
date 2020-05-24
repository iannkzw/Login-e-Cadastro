<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/mvc_php_3/public/css/style.css">
    <title>cadastro</title>
</head>
<body>
<main>
    <div class="container">
        <div class="form-box">
            <form action="/mvc_php_3/?pagina=cadastro" method="post">
                <div>
                    <h1>Cadastro de Usuário</h1>
                </div>

                <div>
                    <input type="text" name="nome" placeholder="Crie seu login" class=form-input>
                </div>

                <div>
                    <input type="password" name="senha" placeholder="Crie sua senha" class=form-input>
                </div>


                <div>
                    <input type="submit" value="salvar" class="form-btn">
                </div>

                <div>
                    Já é registrado? <a href="index.php">Faça login</a>.
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>