<div class="container py-3 bg-white px-4">
    <div class="row  mb-1 border-bottom">
        <div class="col-sm">
            <h6 class="card-title text-pink"><i class="fas fa-file-invoice-dollar pr-2 "></i>Nova Conta</h6>
        </div>
    </div>
    <div class="row font-9 py-3">
        <div class="col-12">
            <form class="text-cin" action="http://localhost/Projetos/projeto-condominio/index.php?page=cadastrarConta" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label class="mb-0" for="inputName">Descrição</label>
                        <input type="text" class="form-control form-control-sm" id="inputDescricao" placeholder="Descrição">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputCPF">Valor</label>
                        <input type="text" class="form-control form-control-sm" id="inputValor" placeholder="Informe o Valor">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputReferencia">Mês de Referencia</label>
                        <input type="month" class="form-control form-control-sm" id="inputReferencia">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputData">Vencimento</label>
                        <input type="date" class="form-control form-control-sm" id="inputData">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputTipo">Tipo</label>
                        <select type="text" class="form-control form-control-sm" id="inputTipo" placeholder="Tipo da Conta">
                            <option value="" selected>Despesa Recorrente</option>
                            <option value="">Despesa Eventual</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 mb-0">
                         <label class="mb-0" for="inputObservacao">Observação</label>
                         <textarea rows="5" class="form-control form-control-sm" id="inputObservacao" placeholder="Observação"></textarea>
                     </div>
                     <div class="form-group mb-4 mt-0"> 
                        <label for="exampleFormControlFile1"></label>
                        <input type="file" name="[]" class="form-control-file form-control-sm" id="exampleFormControlFile1" multiple>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-sm px-4">Cadastrar</button>
            </form>
        </div>
    </div>
</div>