<body>
    
<div class="mt-5">
    <main role="main">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="container d-flex justify-content-center ">
                    <h3 style="margin-top: 3vw;">Selecione uma categoria:</h3>
                    <form action="<?= base_url('Doces/filtrar') ?>" class="d-flex justify-content-center align-items-center" method="POST">
                        <select name="doces" id="doces" class="custom-select ml-3" style="width: 100%; margin-top: 3vw;">
                            <option value="todos">Todos</option>
                            <?php 
                            foreach ($result2 as $value) { ?>
                                <option value="<?= $value->tipo ?>"><?= $value->tipo ?></option>
                            <?php } ?>
                        </select>
                        <button class="btn btn-primary btn-lg rounded-right" type="submit" style="margin-top: 3vw;">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="container marketing">
                <h1 style="margin-top: 4vw;">Nossos Doces:</h1>
                    <div class="row mt-5">
                        <?php   
                        foreach ($result as $value) { ?>
                        <div class="col-lg-3 col-md-5 col-sm-6">
                            <div class="card" style="width: 17rem; margin-top: 1vw;">
                            <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><rect width="100%" height="100%" fill="#777"/></svg>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $value->nome?></h5>
                                    <p class="card-text"><small><?= $value->tipo ?></small></p>
                                    <p class="card-text"><?= $value->tipo ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

</body>