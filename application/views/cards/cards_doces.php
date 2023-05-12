<body>

<div class="modal fade" id="card-details" tabindex="-1" role="dialog" aria-labelledby="card-details-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-dark mx-auto p-4">
            <div class="modal-title">
                <h3 name="inputnome"  id="inputnome" class="pl-3" style="color:#752639;"></h3>
            </div>
            <div class="modal-body">  
                <div data-toggle="modal" data-target="#card-details">
                    <!-- <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <p id="tipodoce" class="ml-1"></p>
                    <p id="modal_body" class="pl-1"> </p>  
                </div>   
            </div>
            <div class="modal-footer">
                <p>Preço de 100 unidades:</p>
                <button disabled="disabled" class="btn" style="background-color:#e55175;">
                    <span id="precodoce" class="mt-2" style="color:#f7f7f7;font-weight:bold;"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<style>
    .card:hover {
        background-color: #fed7da !important;    
    }
    .jumbotron{
        background-color: #fed7da !important;
    }
</style>
<div class="mt-5">
    <main role="main">
        <div class="container mt-5">
            <div class="row jumbotron mt-5">
                <div class="container d-flex justify-content-center ">
                    <h3 style="margin-top: 3vw;color:#752639;" class="display-5">Selecione uma categoria:</h3>
                    <form action="<?= base_url('cards_doces/filtrar') ?>" class="d-flex justify-content-center align-items-center" method="POST">
                        <select name="doces" id="doces" class="custom-select ml-3" style="width: 100%; margin-top: 3vw;">
                            <option <?php if (!isset($_POST["doces"])) { ?>selected="true" <?php }; ?> value="Todos">Todos</option>
                            <option <?php if (@$_POST["doces"] == "Chocolate") { ?>selected="true" <?php }; ?> value="Chocolate">Chocolate</option>
                            <option <?php if (@$_POST["doces"] == "Gourmet") { ?>selected="true" <?php }; ?> value="Gourmet" >Gourmet</option>
                            
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
                        <h1 class="m-3" style="color:#752639;">Nossos Doces:</h1>
                    </div>
                    <div class="row mt-5">
                        <?php 
                        foreach ($result as $row) { 
                            $array = json_decode(json_encode($row),true);
                            $array2 = join('-', $array);?>
                        <div class="col-lg-3 col-md-4 col-sm-6" style="cursor:pointer;">
                            <div class="card cardH" style="width: 15rem; margin-top: 1vw; min-height:15rem;"  onclick="fillModalNome('<?= $array2 ?>')" data-target="#card-details" data-toggle="modal">
                            <!-- <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><rect width="100%" height="100%" fill="#777"/></svg> -->
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#752639;" id="nome" value="<?= $row->nome ?>"><?= $row->nome ?></h5>
                                    <p class="card-text" id="tipo" value="<?= $row->tipo ?>"><small><?= $row->tipo ?></small></p> 
                                    <p class="card-text" id="desc" value="<?= $row->descricao ?>"><?= $row->descricao ?></p>
                                    <p hidden style="display:none;" class="card-text" id="desc" value="<?= $row->preco ?>"><?= $row->preco ?></p>
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

<script>

    function fillModalNome(nome) {
        let array = nome.split("-");
        console.log(array);
        document.getElementById("inputnome").textContent = array[1];
        document.getElementById("tipodoce").textContent = array[2];
        document.getElementById("modal_body").textContent = array[3];
        document.getElementById("precodoce").textContent = array[5];
    }

    // $("#submit").click(function () {
    //     var nome = $("#nome").val();
    //     var str = "You Have Entered " + nome;
    //     $("#modal_body").html(str);
    // });
</script>

</body>