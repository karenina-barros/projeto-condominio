<div class="container py-3 bg-white px-4">
    <div class="row  mb-1 border-bottom">
        <div class="col-sm">
            <h6 class="card-title green"><i class="fas fa-user-check pr-2"></i>Cadastro</h6>
        </div>
    </div>
    <div class="row font-9 py-3">
        <div class="col-12">
            <form class="text-cinza" action="http://localhost/Projetos/projeto-condominio/index.php?page=moradoresEditar">
                <input type="text" name="id" hidden>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputConta">Conta</label>
                        <input type="text" class="form-control form-control-sm" id="inputConta" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputData">Data Vencimento</label>
                        <input type="text" class="form-control form-control-sm" id="inputData" placeholder="DD/MM/AAAA">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputDatapag">Data Pagamento</label>
                        <input type="text" class="form-control form-control-sm" id="inputDatapag" placeholder="DD/MM/AAAA">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label class="mb-0" for="inputTelefone1">Telefone 1</label>
                        <input type="text" class="form-control form-control-sm" id="inputTelefone1" placeholder="Ex: (00) 00000-0000">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="mb-0" for="inputTelefone2">Telefone 2</label>
                        <input type="text" class="form-control form-control-sm" id="inputTelefone2" placeholder="Ex: (00) 0000-0000">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputEmail4">Email</label>
                        <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputPassword4">Senha</label>
                        <input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Senha">
                    </div>
                </div>  

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="unidade">Apartamento</label>
                        <input type="text" class="form-control form-control-sm" id="unidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="unidade">Bloco</label>
                        <input type="text" class="form-control form-control-sm" id="unidade">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm px-4">Cadastrar</button>

            </form>
        </div>
    </div>
</div>