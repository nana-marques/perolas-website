<body>

<div class="mt-5">
    <main role="main">
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
                        <select class="custom-select" id="tamanho">
                            <option selected>Escolha...</option>
                            <option value="1">1 kg</option>
                            <option value="1,5">1 kg e meio</option>
                            <option value="2">2 kg</option>
                            <option value="2,5">2 kg e meio</option>
                            <option value="3">3 kg</option>
                            <option value="3,5">3 kg e meio</option>
                            <option value="4">4 kg</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="massa">Massa do Bolo:</label>
                        </div>
                        <select class="custom-select" id="massa" required>
                            <option selected>Escolha...</option>
                            <option value="branca">Branca</option>
                            <option value="chocolate">Chocolate</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="decoracao">Decoração:</label>
                        </div>
                        <select class="custom-select" id="decoracao" required>
                            <option selected>Escolha...</option>
                            <option value="chantilly">Chantilly</option>
                            <option value="americana">Pasta Americana</option>
                            <option value="ninho">Pasta de Leite Ninho</option>
                            <option value="ganache">Ganache</option>
                            <option value="arroz">Papel de Arroz</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row mt-3">
                <div class="col mt-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="ativo[]" id="ativo">
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
                <div class="col-lg-4 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="mr-3" for="salgado">Nome:</label>
                        </div>
                        <select class="custom-select" id="salgado">
                            <option selected disabled>Escolha...</option>
                            <?php foreach ($resultado as $row) { ?>
                                <option value="<?php $row->id ?>"><?= $row->nome ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="quantidade" class="mr-3">Quantidade</label>
                        </div>
                        <input type="number" class="form-control col-3" id="quantidade" min="10" step="5">
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
					<button class="btn btn-secondary rounded-right text-left btn-lg" title="Adicionar Salgado" type="button">
						<i class="fas fa-plus"></i>
					</button>
                </div>
            </div>
        </div>
    </main>
</div>

</body>