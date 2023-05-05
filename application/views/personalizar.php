<body>

<div class="mt-5">
    <main role="main">
        <?php echo form_open('produtos/personalizar', 'class="p-2" id="personalizar"') ?>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="container marketing">
                    <h1 style="margin-top: 1em;">Personalizar:</h1>
                </div>
            </div>
            <hr>
            <div class="form-group row mt-4">
                <div class="container marketing">
                    <h3 style="margin-top: 1em;">Bolo:</h3>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="tamanho">Tamanho do Bolo (Por Kilo):</label>
                        </div>
                        <select class="custom-select" name="tamanho" id="tamanho" required>
                            <option selected>Escolha...</option>
                            <option value="1kg">1 kg</option>
                            <option value="1,5kg">1 kg e meio</option>
                            <option value="2kg">2 kg</option>
                            <option value="2,5kg">2 kg e meio</option>
                            <option value="3kg">3 kg</option>
                            <option value="3,5kg">3 kg e meio</option>
                            <option value="4kg">4 kg</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="massa">Massa do Bolo:</label>
                        </div>
                        <select class="custom-select" name="massa" id="massa" required>
                            <option selected>Escolha...</option>
                            <option value="Branca">Branca</option>
                            <option value="Chocolate">Chocolate</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="decoracao">Decoração:</label>
                        </div>
                        <select class="custom-select" name="decoracao" id="decoracao" required>
                            <option selected>Escolha...</option>
                            <option value="Chantilly">Chantilly</option>
                            <option value="Pasta Americana">Pasta Americana</option>
                            <option value="Pasta Ninho">Pasta de Leite Ninho</option>
                            <option value="Ganache">Ganache</option>
                            <option value="Papel de Arroz">Papel de Arroz</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="adicional">Adicionais (Especifique):</label>
                        </div>
                        <textarea name="adicional" id="adicional" class="form-control" placeholder="Sua mensagem" cols="50" rows="6"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row mt-4">
                <div class="container marketing">
                    <h3 style="margin-top: 1em;">Docinhos:</h3>
                </div>
                <div class="row col-lg-12" id="divdocinho">
                    <div class="col-lg-6 mt-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="mr-3" for="docinho">Nome:</label>
                            </div>
                            <select class="custom-select" name="docinho" id="docinho" required>
                                <option selected disabled>Escolha...</option>
                                <?php foreach ($resultadoD as $row) { ?>
                                    <option value="<?php echo $row->nome ?>"><?= $row->nome ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="mr-3" for="quantidade">Quantidade:</label>
                            </div>
                            <input type="number" class="form-control col-lg-6" name="quantidade" id="quantidade" min="10" step="5" required>
                        </div>
                    </div>
                    <br />
                    <div class="col-lg-12 mt-3">
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="mr-3" for="adicionaldocinho">Adicionais (Especifique):</label>
                            </div>
                            <textarea name="adicionaldocinho" class="form-control" placeholder="Sua mensagem" cols="50" rows="5"></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-2 mt-3 float-right">
					<button class="btn btn-primary rounded-right text-left btn-lg shadow-none" title="Adicionar Docinho" type="button" id="btnaddDoce">
						<i class="fas fa-plus"></i>
					</button>
                </div>
            </div>
            <hr>
            <div class="form-group row mt-3">
                <div class="col mt-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="ativo" id="ativo">
                        <label class="custom-control-label" for="ativo">Adicionar salgados ao kit </label>
                    </div>
                    <!-- <div class="row mb-3 mt-3">
                        <div class="col-3 custom-control custom-switch">
                            <label class="custom-control-label" for="ativo">Deseja adicionar salgados ao kit? </label>
                            <input type="checkbox" class="custom-control-input" name="ativo[]" id="ativo">
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="form-group row mt-3" id="divBloqueio"> 
                <div class="container marketing">
                    <h3 style="margin-top: 1em;">Salgados:</h3>
                </div>
                <div class="row col-lg-12" id="divsalgado">
                    <div class="col-lg-6 mt-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="mr-3" for="salgado">Nome:</label>
                            </div>
                            <select class="custom-select" name="salgado" id="salgado">
                                <option selected disabled>Escolha...</option>
                                <?php foreach ($resultadoS as $row) { ?>
                                    <option value="<?php echo $row->nome ?>"><?= $row->nome ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="quantidadesalgado" class="mr-3">Quantidade:</label>
                            </div>
                            <input type="number" class="form-control col-3" name="quantidadesalgado" min="10" step="5">
                        </div>
                    </div>
                    <br />
                </div>
                <br />
                <div class="col-lg-2 mt-3 float-right">
					<button class="btn btn-primary rounded-right text-left btn-lg shadow-none" title="Adicionar Salgado" type="button" id="btnadd">
						<i class="fas fa-plus"></i>
					</button>
                </div>
            </div>
            <button class="btn btn-secondary btn-lg rounded-right mt-5 shadow-none" type="submit" style="">
                <span>Enviar Tudo</span>
            </button>
        </div>
        <?= form_close()?>
    </main>
</div>

<script>
    $(function() {
        var count = 1;
        var countD = 1;
        $('#btnadd').click(function(){
            count++;
            var newDiv = $('<div class="col-lg-6 mt-3">\
            <div class="input-group">\
                <div class="input-group-prepend"> \
                    <label class="mr-3" for="salgadoadd'+ count +'">Nome:</label>\
                </div>\
                <select class="custom-select" name="salgadoadd'+ count +'" id="salgado">\
                    <option selected disabled>Escolha...</option>\
                    <?php foreach ($resultadoS as $row) { ?>\
                    <option value="<?php echo $row->nome ?>"><?= $row->nome ?></option>\
                    <?php } ?>\
                </select>\
            </div></div>\
            <div class="col-lg-6 mt-3">\
                <div class="input-group mb-3">\
                    <div class="input-group-prepend">\
                        <label for="quantidadesalgado'+ count +'" class="mr-3">Quantidade:</label>\
                    </div>\
                    <input type="number" min="10" max="200" class="form-control col-3" name="quantidadesalgado'+ count +'"  min="10" step="5">\
                </div>\
            </div><br />');
            $('#divsalgado').append(newDiv);
        });
        $('#btnaddDoce').click(function(){
            count++;
            var newDivDoce = $('<div class="col-lg-6 mt-3">\
            <div class="input-group">\
                <div class="input-group-prepend">\
                    <label class="mr-3" for="docinhoadd'+ countD +'">Nome:</label>\
                </div>\
                <select class="custom-select" name="docinhoadd'+ countD +'">\
                    <option selected disabled>Escolha...</option>\
                    <?php foreach ($resultadoD as $row) { ?>\
                    <option value="<?php echo $row->nome ?>"><?= $row->nome ?></option>\
                    <?php } ?>\
                </select>\
            </div></div>\
            <div class="col-lg-6 mt-3">\
                <div class="input-group mb-3">\
                    <div class="input-group-prepend">\
                        <label class="mr-3" for="quantidadedocinho'+ countD +'">Quantidade:</label>\
                    </div>\
                    <input type="number" min="10" max="200" class="form-control col-lg-6" name="quantidadedocinho'+ countD +'" min="10" step="5">\
                </div>\
            </div><br />\
            <div class="col-lg-12 mt-3">\
                <div class="form-group input-group mb-3">\
                    <div class="input-group-prepend">\
                        <label class="mr-3" for="adicionaldocinho'+ countD +'">Adicionais (Especifique):</label>\
                    </div>\
                    <textarea name="adicionaldocinho'+ countD +'" class="form-control" placeholder="Sua mensagem" cols="50" rows="5"></textarea>\
                </div>\
            </div>');
            $('#divdocinho').append(newDivDoce);
        });
    });

</script>

</body>