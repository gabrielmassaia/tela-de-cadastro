<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="opa">
    <div class="box">
    <div class="col-md-10 offset-md-1">

        <h1>Seja Bem vindo! <br>
         Massaia's Engineering and Architecture</h1>
        <h2>Faça o seu cadastro:</h2>
        <hr>
        <form id="form_cadastro" method="POST">

            <div class="form-row">

                <div class="col-md-4">
                    <label for="nome">Nome</label>
                    <br>
                    <input class="form-control" id="nome" type="text" name="nome" required placeholder=" Insira seu nome">
                </div>

                <div class="col-md-4">
                    <label for="email">Email</label>
                    <br>
                    <input class="form-control" id="email" type="text" name="email" required placeholder=" Insira seu melhor email">
                </div>

                <div class="col-md-4">
                    <label for="cidade">Cidade</label>
                    <br>
                    <input class="form-control" id="cidade" type="text" name="cidade" required placeholder=" Onde você mora?">
                </div>

                <div class="col-md-4">
                    <label for="bairro">Bairro</label>
                    <br>
                    <input class="form-control" id="bairro" type="text" name="bairro" required placeholder=" Seu bairro">
                </div>

                <div class="col-md-4">
                    <label for="rua">Rua</label>
                    <br>
                    <input class="form-control" id="rua" type="text" name="rua" required placeholder=" Sua rua">
                </div>

                <div class="col-md-4">
                    <label for="numero">Número (Informe o (DDD))</label>
                    <br>
                    <input class="form-control" type="number" name="numero" id="numero" required placeholder=" Seu telefone (celular)">
                </div>

            </div>
            <br>
            <button class="btn btn-primary" type="button" onclick="cadastrarUsuario()">Cadastrar</button>

        </form>
    </div>
    </div>
    </div>
</body>

</html>