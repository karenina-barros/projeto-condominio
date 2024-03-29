<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/estilo.css">
</head>

<body>
    <div class="container-fluid p-5 bg-img">
        <div class="row justify-content-center my-5">
            <div class="col-10 mt-5">
                <div class="col-4 mx-auto bg-dark p-5">
                    <div class="text-center">
                            <img src="./assets/img/logo.png" class="img-logo" alt="">
                    </div>
                    <form class="pt-4 ">
                        <div class="form-group pb-3 mt-3">
                            <input type="email" class="form-control form-control-sm input-login border-0"
                                name="InputEmail" id="InputEmail" placeholder="Insira Seu Email"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Ex: conta@dominio.com.br</small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-sm input-login border-0"
                                name="InputSenha" id="InputSenha" placeholder="Insira Sua Senha">
                        </div>
                        <div class="form-check">
                            <label for="" class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input ">
                                <small>Manter Conectado</small>
                            </label>
                        </div>
                        <div class="form-check">
                            <a class="btn btn-link m-0 p-0 text-muted">
                                 <small>Esqueci Minha Senha</small>
                            </a>
                        </div>
                        
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=home">
                            <button class="btn btn-block mt-4 btn-login text-white bg-green" type="button">Entrar</button>
                        </a>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="./assets/js/botstrap/js/jquery.min.js"></script>
    <script src="./assets/js/botstrap/js/bootstrap.min.js"></script>
</body>

</html>