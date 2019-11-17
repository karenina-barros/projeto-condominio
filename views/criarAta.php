<div class="container py-3 bg-white px-4">
    <div class="row  mb-1 border-bottom">
        <div class="col-sm">
            <h6 class="card-title green font-9"><i class="fas fa-file pr-2 text-green-dark"></i>Nova Ata</h6>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12">
            <form class="text-cin" action="http://localhost/Projetos/projeto-condominio/index.php?page=criarAta">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputcondominio">condomínio</label>
                        <input type="text" class="form-control form-control-sm" id="inputcondominio" placeholder="Digite O Nome do Condomínio">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="mb-0" for="inputnumeroed">Edifício Número</label>
                        <input type="text" class="form-control form-control-sm" id="inputnumeroed" placeholder="Número do Edifício">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputdata">Data</label>
                        <input type="date" class="form-control form-control-sm" id="inputdata" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="mb-0" for="inputhora">horas</label>
                        <input type="time" class="form-control form-control-sm" id="inputhora" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label class="mb-0" for="inputAddress">Logradouro</label>
                        <input type="text" class="form-control form-control-sm" id="inputAdresss" placeholder="Ex: Rua, Av. Brasil ">
                    </div>
                    <div class="form-group col-md-1">
                        <label class="mb-0" for="inputNumber">Número</label>
                        <input type="number" class="form-control form-control-sm" id="inputNumber">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputBairro">Bairro</label>
                        <input type="text" class="form-control form-control-sm" id="inputBairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="mb-0" for="inputCEP">CEP</label>
                        <input type="text" class="form-control form-control-sm" id="inputCEP" placeholder="Ex: 35.123-456">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="mb-0" for="inputCity">Cidade</label>
                        <input type="text" class="form-control form-control-sm" id="inputCity" placeholder="Informe Sua Cidade">
                    </div>
                    <div class="form-group col-md-4 ">
                        <label class="mb-0" for="inputEstado">Estado</label>
                        <select id="inputEstado" class="form-control form-control-sm">
                            <option selected>Escolher...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label class="mb-0" for="inputCondomino">condominos Presentes</label>
                        <select class="selectpicker form-control form-control-sm" multiple>
                            <option value='1'>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm px-4">Salvar</button>
            </form>
        </div>
    </div>
</div>