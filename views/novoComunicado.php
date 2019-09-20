<div class="container py-3 bg-white px-4">
    <div class="row  mb-1 border-bottom">
        <div class="col-sm">
            <h6 class="card-title green"><i class="fas fa-user-check pr-2"></i>Novo Comunicado</h6>
        </div>
    </div>
    <div class="row font-9 py-3">
        <div class="col-12">
            <form class="text-cinza" action="http://localhost/Projetos/projeto-condominio/index.php?page=novoComunicado" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputAssunto">Assunto</label>
                        <input type="text" class="form-control form-control-sm" id="inputAssunto" placeholder="Digite o Assunto">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="mb-0" for="inputDescricao">Descrição</label>
                        <textarea id="textComunicado" placeholder="Digite a Descrição"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm px-4">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

<script src="vendor/tinymce/js/tinymce/tinymce.min.js"></script> 
<script>
    tinymce.init({
        selector: '#textComunicado'
    });
</script>
