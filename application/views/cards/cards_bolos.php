<body>

<div class="modal fade" id="card-details" tabindex="-1" role="dialog" aria-labelledby="card-details-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">  
                <div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#card-details">
                    <!-- <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <p class="card-text" id="modal_body"></p>
                </div>   
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <main role="main">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="container d-flex justify-content-center ">
                    <h3 style="margin-top: 3vw;">Selecione uma categoria:</h3>
                    <form action="<?= base_url('cards_bolos/filtrar')?>" class="d-flex justify-content-center align-items-center" method="POST"> 
                        <select name="bolos" id="bolos" class="custom-select ml-3" style="width: 100%; margin-top: 3vw;">
                            <option value="Todos" selected >Todos</option>
                            <?php 
                            foreach ($result2 as $value) { ?>
                                <option <?php  //if(($value->tipo)){ echo 'selected'; }?>  value="<?= $value->tipo ?>"><?= $value->tipo ?></option>
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
                    <div class="row mt-5">
                        <h1 class="m-3">Nossos Bolos:</h1>
                    </div>
                    <div class="row mt-5">
                        <?php 
                        foreach ($result as $row) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6" style="cursor:pointer;" id="submit" data-toggle="modal" data-target="#card-details">
                            <div class="card cardH" style="width: 15rem; margin-top: 1vw;">
                            <!-- <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><rect width="100%" height="100%" fill="#777"/></svg> -->
                                <div class="card-body">
                                    <h5 class="card-title" id="nome" value="<?= $row->nome ?>"><?= $row->nome ?></h5>
                                    <p class="card-text" id="tipo" value="<?= $row->tipo ?>"><small><?= $row->tipo ?></small></p> 
                                    <p class="card-text" id="desc" value="<?= $row->descricao ?>"><?= $row->descricao ?></p>
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

<script type="text/javascript">
    $("#submit").click(function () {
        var nome = $("#nome").val();
        var str = "You Have Entered " + nome;
        $("#modal_body").html(str);
    });
</script>

</body>