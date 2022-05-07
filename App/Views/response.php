<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light"> 
    <div class="container" style="background-color: #ededed; min-height:100vh;">
        <h1 class="text-center p-2">Suporte - Administração</h1> <span><b>logado como:</b> admin </span>
        <hr>

        <div class="row">
            <div class="offset-3 col-6 p-3 rounded" style="background-color: #ededed;">
                <?php $user = User::Id($_GET['id']) ?>
                <form action="?page=admin&action=store" method="post">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    
                    <input type="email" name="email" class="form-control my-2" value="<?= $user['email'] ?>" required>

                    <input type="text" name="subject" class="form-control my-2" placeholder="Assunto" required>

                    <textarea name="message" placeholder="Mensagem" class="form-control my-2" rows="5" cols="33" required></textarea>
                    <button type="submit" class="btn btn-primary my-2">Enviar e-mail</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>