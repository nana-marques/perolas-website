<div class="mt-5">
    <main role="main">
        
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="container marketing">
                    <h1 style="margin-top: 1em;">Personalizado:</h1>
                </div>
            </div>
            <hr>
            <div class="form-group row mt-4">
                <div class="container marketing">
                    <h3 style="margin-top: 1em;">Bolo:</h3>
                    <br />
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
                    <p><?= $post['tamanho']; ?>, <?= $post['massa']; ?>, <?= $post['decoracao']; ?></p>
                    <p style="font-weight:bold;">Preço: R$<?= $preco ?>,00</p>
                </div>
                <div class="container marketing">
                    <h3 style="margin-top: 1em;">Bolo:</h3>
                    <br />
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
                    <p><?= $post['tamanho']; ?>, <?= $post['massa']; ?>, <?= $post['decoracao']; ?></p>
                    <p style="font-weight:bold;">Preço: R$<?= $preco ?>,00</p>
                </div>
            </div>
            <hr>
        </div>
        
    </main>
</div>
