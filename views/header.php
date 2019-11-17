<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1/dist/css/bootstrap.min.css"">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-select-1.13.9/dist/css/bootstrap-select.min.css">

    
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link href="./assets/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet">

    <title>Deshboard</title>

</head>

<body>
    <div class="container-fluid mb-4">
        <div class="row  topo bg-white border-bottom">
            <div class="col-5 px-1 py-1">
                    <img src="./assets/img/logo-header.png" class="img-logo1  rounded" alt="">
            </div>
            <div class="col-3 justify-content-center py-2">
                <form class="col-12 input-group input-group-sm pt-1">
                    <input type="text" class="form-control input-green" placeholder="Pesquisar...">
                    <span class="input-group-append ">
                        <button class="btn btn-green"><i class="fas fa-search"></i></button>
                    </span>
                </form>
            </div>
            <div class="col-4 pt-2">
                <ul class="nav justify-content-end">
                    <li class="nav-item text-muted icon-topo">
                        <a class="nav-link ">
                            <i class="far fa-bell "></i>
                        </a>
                    </li>
                    <li class="nav-item text-muted icon-topo">
                        <a class="nav-link">
                            <i class="far fa-comment"></i>
                        </a>
                    </li>
                    <li class="nav-item text-muted icon-topo">
                        <a class="nav-link">
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item text-pink">
                        <a class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col-2 list-group list-group-flush menu p-0">
                <a href="http://localhost/Projetos/projeto-condominio/index.php?page=home   " class="list-group-item text-muted font-8">
                    <i class="fas fa-home pr-2 ml-4"></i>
                    Home
                </a>
                <a href="http://localhost/Projetos/projeto-condominio/index.php?page=moradores" class="list-group-item text-muted font-8">
                    <i class="fas fa-users pr-2 ml-4"></i>
                    Moradores
                </a>
                <a href="http://localhost/Projetos/projeto-condominio/index.php?page=funcionarios" class="list-group-item text-muted font-8">
                    <i class="fas fa-user-tag pr-2 ml-4"></i>
                    Funcionarios
                </a>
                <a href="http://localhost/Projetos/projeto-condominio/index.php?page=comunicados" class="list-group-item text-muted font-8">
                    <i class="fas fa-bullhorn pr-2 ml-4"></i>
                    Comunicados
                </a>
                <a href="http://localhost/Projetos/projeto-condominio/index.php?page=documento" class="list-group-item text-muted font-8">
                    <i class="far fa-folder-open pr-2 ml-4"></i>
                    Documentos
                </a>
                <a href="#" class="list-group-item text-muted font-8">
                    <i class="fas fa-tasks pr-2 ml-4"></i>
                    Planejamento
                </a>
                <a href="#" class="list-group-item text-muted font-8">
                    <i class="fas fa-cogs pr-2 ml-4"></i>
                    Configurações
                </a>
                <div href=""  class="item-dropdown text-muted font-8 border-bottom">
                    <i class="far fa-file-alt pr-3 ml-4"></i>
                        Relatórios
                    <ul class="dropdown-ul">
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=despesas">
                            <li class="text-muted">Despesas</li>
                        </a>
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=receitas">
                            <li class="text-muted">Receitas</li>
                        </a>
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=balanco">
                            <li class="text-muted">Balanço</li>
                        </a>
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=inadiplencia">
                            <li class="text-muted">Inadiplência</li>
                        </a>
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=reserva">
                            <li class="text-muted">Fundo de Reserva</li>
                        </a>
                    </ul>
                </div>
                <div href=""  class="item-dropdown text-muted font-8 border-bottom">
                    <i class="fas fa-dollar-sign pr-3 ml-4"></i>
                        Financeiro
                    <ul class="dropdown-ul">
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=contaReceber">
                            <li class="text-muted">Contas A Receber</li>
                        </a>
                        <a href="http://localhost/Projetos/projeto-condominio/index.php?page=contaPagar">
                            <li class="text-muted">Contas a Pagar</li>
                        </a>
                    </ul>
                </div>
            </div>
       
            <div class="col-10 py-3 px-4 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-12 bg-white mb-2 py-3 px-4" >
                        <h5 class="m-0 text-uppercase text-green-dark h6" id="page"><i class="far fa-chart-bar pr-2"></i>Deshboard</h5>
                        </div>
                    </div>
                </div>
           
           

    