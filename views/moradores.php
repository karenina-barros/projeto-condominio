<div class="container bg-white px-4">
    <div class="row py-3 border-bottom">
        <div class="col-sm">
            <h6 class="card-title    green mt-2 mb-0"><i class="fas fa-list-alt pr-2 "></i>Listagem</h6>
        </div>
        <div class="col-sm text-right">
            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=moradoresCadastrar" class="btn bg-orange btn-sm font-8"><i class="fas fa-plus pr-2"></i>Cadastrar Morador</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-12">
            <table class="table table-sm table-hover font-9 text-cinza text-center">
                <thead class="bg-blue text-white">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Apartamento</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i = 1; $i <= 12; $i++){ ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>Lucia da silva Barros</td>
                        <td>Otto</td>
                        <td>
                            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=moradoresPerfil" class="btn btn-sm text-white btn-info px-2 py-0 mr-1">
                                <i class="fas fa-eye pr-2"></i>Ver
                            </a>
                            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=moradoresEditar" class="btn btn-sm text-white bg-yellow px-2 py-0 mr-1">
                                <i class="fas fa-edit pr-2"></i>Editar
                            </a> 
                            <a href="" class="btn btn-sm text-white px-2 py-0 bg-red">
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