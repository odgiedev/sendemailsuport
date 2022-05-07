<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container" style="background-color: #ededed; min-height:100vh;">
        <h1 class="text-center p-2">Suporte - Administração</h1> <span><b>logado como:</b> admin </span>
        <hr>
        <?php foreach(User::All() as $user): ?>
            <div class="row d-flex justify-content-center my-5">
                <div class="col-10 bg-light p-3"> 
                    <span class="me-5"><b>Nome: </b> <?= $user['name'] ?></span>
                    <span><b>E-mail:</b> <?= $user['email'] ?></span>
                    <hr>
                    <p><b><?= $user['message'] ?></b></p>
                    
                    <div class="row justify-content-end">
                        <?php if(isset($user['response'])): ?>
                            <div class="col-2">
                                <a href="?page=admin&action=response&id=<?= $user['id'] ?>" class="btn btn-success">Respondido</a>
                            </div>
                        <?php else: ?>
                            <div class="col-2">
                                <a href="?page=admin&action=response&id=<?= $user['id'] ?>" class="btn btn-primary">Responder</a>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>