<div class="mt-5">
    <main role="main">
        
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="container marketing">
                    <h1 style="margin-top: 1em;">Personalizado:</h1>
                </div>
            </div>
            <hr>
            <div class="form-group col mt-4">
                <ul class="col container marketing">
                    <h3 style="margin-top: 1em;" class="row">Bolo:</h3>
                    <?php 
                        $tamanho = $post['tamanho'];
                        $massa = $post['massa'];
                        $decoracao = $post['decoracao'];
                        $preco = 20;
                    
                        switch ($tamanho){
                            case '1kg':
                                $preco += 20;
                                break;
                            case '1,5kg':
                                $preco += 25;
                                break;
                            case '2kg':
                                $preco += 30;
                                break;
                            case '2,5kg':
                                $preco += 35;
                                break;
                            case '3kg':
                                $preco += 40;
                                break;
                            case '3,5kg':
                                $preco += 45;
                                break;
                            case '4kg':
                                $preco += 50;
                                break;
                            case '4,5kg':
                                $preco += 55;
                                break;
                        }
                    
                        switch ($decoracao){
                            case 'Chantilly':
                                $preco += 20;
                                break;
                            case 'Pasta Americana':
                                $preco += 25;
                                break;
                            case 'Pasta Ninho':
                                $preco += 30;
                                break;
                            case 'Ganache':
                                $preco += 35;
                                break;
                            case 'Papel de Arroz':
                                $preco += 40;
                                break;
                        }

                        if ($post['massa'] == 'Chocolate'){
                            $preco += 5;
                        }

                    ?>
                    <p class="row">Peso: <?= $post['tamanho']; ?></p>
                    <p class="row">Massa: <?= $post['massa']; ?></p>
                    <p class="row">Decoração: <?= $post['decoracao']; ?></p>
                    <p class="row" style="font-weight:bold;">Preço: R$<?= $preco ?>,00</p>
                </ul>
                <ul class="col container marketing">
                    <h3 style="margin-top: 1em;" class="row">Doces:</h3>
                        <?php 
                            $quantidade = $post['quantidade'];
                            $qtd = ceil($quantidade / 5) * 5;
                            $preco = 40;
                        ?>
                    <li class="row">
                        <p class=""><?= $post['docinho']; ?>, <?= $post['quantidade']; ?> unidades<br /><?= isset($post['adicionaldocinho']) ? ($post['adicionaldocinho']) : ''; ?></p>
                    </li>
                    <?php if(isset($post['docinhoadd1'])){?>
                    <li class="row">
                        <?php 
                            $quantidade1 = $post['quantidadedocinho1'];
                            $qtd = $quantidade + (ceil($quantidade1 / 5) * 5);
    
                            if ($qtd < 100){
                                $preco = $preco + 20;
                                
                            }
                        ?>
                        
                        <p><?= $post['docinhoadd1']; ?>, <?= $post['quantidadedocinho1']; ?> unidades<br /><?= isset($post['adicionaldocinho1']) ? ($post['adicionaldocinho1']) : ''; ?></p>
                    </li>
                    <?php }?>
                    <?php if(isset($post['docinhoadd2'])){?>
                    <li class="row">
                        <?php 
                            $quantidade2 = $post['quantidadedocinho2'];
                            $qtd = $quantidade + (ceil($quantidade1 / 5) * 5) + (ceil($quantidade2 / 5) * 5);
    
                            if ($qtd < 100){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['docinhoadd2']; ?>, <?= $post['quantidadedocinho2']; ?><?= isset($post['adicionaldocinho2']) ? ($post['adicionaldocinho2']) : ''; ?></p>
                    </li>
                    <?php }?>
                    <?php if(isset($post['docinhoadd3'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade3 = $post['quantidadedocinho3'];
                            $qtd = $quantidade + (ceil($quantidade1 / 5) * 5) + (ceil($quantidade2 / 5) * 5) + (ceil($quantidade3 / 5) * 5);

                            if ($qtd < 100){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['docinhoadd3']; ?>, <?= $post['quantidadedocinho3']; ?><?= isset($post['adicionaldocinho3']) ? ($post['adicionaldocinho3']) : ''; ?></p>
                        
                    </li>
                    <?php }?>
                    <?php if(isset($post['docinhoadd4'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade4 = $post['quantidadedocinho4'];
                            $qtd = $quantidade + (ceil($quantidade1 / 5) * 5) + (ceil($quantidade2 / 5) * 5) + (ceil($quantidade3 / 5) * 5) + (ceil($quantidade4 / 5) * 5);
                            
                            if ($qtd < 100){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['docinhoadd4']; ?>, <?= $post['quantidadedocinho4']; ?><?= isset($post['adicionaldocinho4']) ? ($post['adicionaldocinho4']) : ''; ?></p>
                        
                    </li>    
                    <?php }?>
                    <?php if(isset($post['docinhoadd5'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade5 = $post['quantidadedocinho5'];
                            $qtd = $quantidade + (ceil($quantidade1 / 5) * 5) + (ceil($quantidade2 / 5) * 5) + (ceil($quantidade3 / 5) * 5) + (ceil($quantidade4 / 5) * 5) + (ceil($quantidade5 / 5) * 5);
                        
                            if ($qtd < 100){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['docinhoadd5']; ?>, <?= $post['quantidadedocinho5']; ?> unidades<?= isset($post['adicionaldocinho5']) ? ($post['adicionaldocinho5']) : ''; ?></p>
                    </li>
                    <?php }?>
                    <?php 
                        if ($qtd < 100){
                                echo "<p class='pt-1 ml-1 badge text-white bg-danger'>Selecione no minimo 100 docinhos!</p>";
                    }?>
                    <p class="row" style="font-weight:bold;">Preço Total: R$<?= $preco ?>,00</p>
                </ul>
                <?php if(isset($post['salgado'])){?>
                <ul class="col container marketing">   
                    <h3 style="margin-top: 1em;" class="ml-2">Salgados:</h3>
                        <?php 
                            $quantidade = $post['quantidadesalgado'];
                            $qtd = ceil($quantidade / 5) * 5;
                            $preco = 20;


                            if ($qtd < 100){
                                $preco += 20;
                                echo "<p style='margin-top: 3em;' class='pt-2 ml-2 badge bg-warning'>Selecione no minimo 100 salgados!</p>";
                            }

                        ?>
                
                    <li class="col-3">
                        <p><?= $post['salgado']; ?>, <?= $post['quantidadesalgado']; ?></p>
                    </li>
                    <?php if(isset($post['salgadoadd1'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade = $post['quantidadesalgado1'];
                            $qtd = ceil($quantidade / 5) * 5;
                            $preco = 20;
    
    
                            if ($qtd < 50){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['salgadoadd1']; ?>, <?= $post['quantidadesalgado1']; ?></p>
                    </li>
                    <?php }?>
                    <?php if(isset($post['salgadoadd2'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade = $post['quantidadesalgado2'];
                            $qtd = ceil($quantidade / 5) * 5;
                            
                            if ($qtd < 50){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['salgadoadd2']; ?>, <?= $post['quantidadesalgado2']; ?></p>
                    </li>
                    <?php }?>
                    <?php if(isset($post['salgadoadd3'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade = $post['quantidadesalgado3'];
                            $qtd = ceil($quantidade / 5) * 5;
                            $preco = 20;
    
    
                            if ($qtd < 50){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['salgadoadd3']; ?>, <?= $post['quantidadesalgado3']; ?></p>
                    </li>
                    <?php }?>
                    <?php if(isset($post['salgadoadd4'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade = $post['quantidadesalgado4'];
                            $qtd = ceil($quantidade / 5) * 5;
                            $preco = 20;
    
    
                            if ($qtd < 50){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['salgadoadd4']; ?>, <?= $post['quantidadesalgado4']; ?></p>
                        <p style="font-weight:bold;">Preço: R$<?= $preco ?>,00</p>
                    </li>
                    <?php }?>
                    <?php if(isset($post['salgadoadd5'])){?>
                    <li class="col-3">
                        <?php 
                            $quantidade = $post['quantidadesalgado5'];
                            $qtd = ceil($quantidade / 5) * 5;
                            $preco = 20;
    
    
                            if ($qtd < 50){
                                $preco += 20;
                            }
    
                        ?>
                        <p><?= $post['salgadoadd5']; ?>, <?= $post['quantidadesalgado5']; ?></p>
                        <p style="font-weight:bold;">Preço: R$<?= $preco ?>,00</p>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
            </div>
            <hr>
        </div>
        
    </main>
</div>
