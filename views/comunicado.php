<div class="container bg-white px-4">
    <div class="row py-3 border-bottom">
        <div class="col-sm">
            <h6 class="card-title green mt-2 mb-0"><i class="fas fa-envelope-open-text pr-2 "></i>Comunicado</h6>
        </div>
        <div class="col-sm text-right">
            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=novoComunicado" class="btn bg-orange btn-sm font-8"><i class="fas fa-plus pr-2"></i>Novo</a>
            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=novoComunicado" class="btn bg-orange btn-sm font-8"><i class="fas fa-edit pr-2"></i>Editar</a>
            <a href="http://localhost/Projetos/projeto-condominio/index.php?page=novoComunicado" class="btn bg-orange btn-sm font-8"><i class="fas fa-trash-alt pr-2"></i>Remover</a>
        </div>
    </div>
    <div class="row my-4 pb-4 ">
        <div class="col-8">
            <div class="card border-defalt ">
                <div class="card-header py-1 m-0">Cabeçalho</div>
                <div class="card-body font-9  text-cinza">              
                    <h6 class="card-title text-dark">Título de Card Dark</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <div class="row text-muted">
                        <div class='col-6'>
                            <p>Elizabeth Linhares</p>
                        </div>
                        <div class='col-6 text-right'>
                            <?= date('d/m/Y') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-defalt ">
                <div class="card-header py-1 m-0">Anexos</div>
                <div class="card-body font-8  text-cinza px-2 py-0">              
                    <ul class="list-group list-group-flush py-2">
                        <li class="list-group-item"><i class="far fa-file-pdf pr-3"></i>Arquivo PDF</li>   
                        <li class="list-group-item"><i class="far fa-file-pdf pr-3"></i>Arquivo PDF</li>   
                        <li class="list-group-item"><i class="far fa-file-pdf pr-3"></i>Arquivo PDF</li>   
                        <li class="list-group-item"><i class="far fa-file-pdf pr-3"></i>Arquivo PDF</li>   
                        <li class="list-group-item"><i class="far fa-file-pdf pr-3"></i>Arquivo PDF</li>   
                    </ul>
                </div>
            </div>
        </div> 
    </div>
 </div>   