<div class="row">
    <div class="col-12">
        <div class="container py-3 bg-white px-4">
            <div class="row  mb-1 border-bottom">
                <div class="col-sm">
                    <h5 class="card-title text-uppercase green"><i class="fas fa-users pr-2"></i>Moradores</h5>
                </div>
            </div>
            <div class="row font-9 py-3">
                <div class="col-12">
                    <form>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputName">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="inputName" placeholder="Digite Seu Nome">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputLastname">Sobrenome</label>
                            <input type="text" class="form-control form-control-sm" id="inputLastname" placeholder="Digite Seu Sobrenome">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCPF">CPF</label>
                            <input type="text" class="form-control form-control-sm" id="inputCPF" placeholder="Informe Seu CPF">
                        </div>
                        </div>
        
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputTelefone1">Telefone 1</label>
                                <input type="text" class="form-control form-control-sm" id="inputTelefone1" placeholder="Ex: (00) 00000-0000">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputTelefone2">Telefone 2</label>
                                <input type="text" class="form-control form-control-sm" id="inputTelefone2" placeholder="Ex: (00) 0000-0000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Senha</label>
                                <input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Senha">
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="form-group col-md-4 py-2">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="ondeMora" value="1" id="moraPredio" class="custom-control-input">
                                    <label class="custom-control-label" for="moraPredio">Mora no Prédio</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="ondeMora" value="2" id="moraOutroEndereco" class="custom-control-input">
                                    <label class="custom-control-label" for="moraOutroEndereco">Mora em Outro Endereço</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="unidade">Qual Apartamento?</label>
                                <input type="text" class="form-control form-control-sm" id="unidade">
                            </div>
                        </div>

                        <div class="border-top pt-3" id="enderecoExterno">
                            <p class="text-danger mb-2">Endereço Externo</p>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCEP">CEP</label>
                                    <input type="text" class="form-control form-control-sm" id="inputCEP" placeholder="Ex: 35.123-456">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputAddress">Rua</label>
                                    <input type="text" class="form-control form-control-sm" id="inputAdresss" placeholder="Informe Sua Rua ">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="inputNumber">Número</label>
                                    <input type="number" class="form-control form-control-sm" id="inputNumber">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputComplemento">Complemento</label>
                                    <input type="text" class="form-control form-control-sm" id="inputComplemento" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputBairro">Bairro</label>
                                    <input type="text" class="form-control form-control-sm" id="inputBairro" placeholder="Bairro">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" class="form-control form-control-sm" id="inputCity" placeholder="Informe Sua Cidade">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="inputEstado">Estado</label>
                                    <select id="inputEstado" class="form-control form-control-sm">
                                        <option selected>Escolher...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-sm px-4">Caddastrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>