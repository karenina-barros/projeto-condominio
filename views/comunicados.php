<div class="container bg-white px-4">
    <div class="row py-3 border-bottom">
        <div class="col-sm text-muted">
            <h6 class="card-title mt-2 mb-0"><i class="fas fa-list-alt pr-2 text-green-dark"></i>Listagem</h6>
        </div>
        <div class="col-sm text-right">
            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=novoComunicado" class="btn btn-info btn-sm font-9"><i class="fas fa-plus pr-2"></i>Novo Comunicado</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-12">
            <table class="table table-sm table-hover font-9 text-cin text-center">
                <thead>
                    <tr>
                        <th scope="col">Assunto</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Morador</th>
                        <th scope="col">Data</th>
                        <th scope="col">Ações   </th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i = 1; $i <= 12; $i++){ ?>
                    <tr>
                        <td>Nova Pintura do Prediod</td>
                        <td>O começo da pintura do predio, etsar marcado...</td>
                        <td>Karenina Barros</td>
                        <td><?= date('d/m/Y') ?></td>
                        <td>
                            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=comunicado" class="btn btn-sm text-white btn-info px-2 py-0 mr-1">
                                <i class="fas fa-eye pr-2"></i>Ver
                            </a>
                            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=moradoresEditar" class="btn btn-sm text-white bg-green-dark px-2 py-0 mr-1">
                                <i class="fas fa-edit pr-2"></i>Editar
                            </a> 
                            <a href="" class="btn btn-sm text-white px-2 py-0 bg-pink">
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