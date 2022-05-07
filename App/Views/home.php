<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container vh-100 text-center">
        <div class="row">
            <div class="col-9">
                <h1 class="text-start p-3"><img src="./img/logo.png" style="max-height:50px" alt="Logo"></a> suporte</h1>
            </div>
            <div class="col-2 mt-4">
                <a href="?page=admin" class="btn btn-outline-primary">Administrativo</a>
            </div>
        </div>
        <hr>

        <h3>Em que podemos te ajudar?</h3>
        
        <div class="row">
            <div class="offset-3 col-6 p-3 rounded" style="background-color: #ededed;">
                <form action="?page=home&action=store" method="post">
                    <input type="text" name="name" class="form-control my-2" placeholder="Nome" required>

                    <input type="email" name="email" class="form-control my-2" placeholder="E-mail" required>

                    <textarea name="message" placeholder="Mensagem" class="form-control my-2" rows="5" cols="33" required></textarea>
                    <button type="submit" class="btn btn-primary my-2">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>