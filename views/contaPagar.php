<div class="container bg-white px-4">
    <div class="row py-3 border-bottom">
        <div class="col-sm text-pink">
            <h6 class="card-title green mt-2 mb-0"><i class="fas fa-search-dollar pr-2"></i>Contas a Pagar</h6>
        </div>
        <div class="col-sm text-right">
            <a class="btn bg-pink text-white btn-sm font-8" href="http://localhost/Projetos/projeto-condominio/index.php?page=cadastrarConta"><i class="fas fa-plus pr-2"></i>Nova Conta</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3">
            <table class="table table-sm table-hover font-9 text-cin text-center">
                <thead>
                    <tr>
                        <th scope="col">Contas</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i = 1; $i <= 12; $i++){ ?>
                    <tr>
                        <td>Recebimento do 201</td>
                        <td><?= date('d/m/Y') ?></td>
                        <td>R$100,00</td>
                        
                        <td>
                            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=verConta" class="btn btn-sm text-white btn-info px-2 py-0 mr-1">
                                <i class="fas fa-eye pr-2"></i>Ver
                            </a>
                            <a href="#" class="btn btn-sm text-white bg-green-dark px-2 py-0 mr-1">
                                    <i class="fas fa-edit pr-2"></i>Editar
                            </a> 
                            <a href="#" class="btn bg-pink btn-sm text-white px-2 py-0 bg-red">
                                <i class="fas fa-trash-alt pr-2"></i>Remover
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>    
</div>