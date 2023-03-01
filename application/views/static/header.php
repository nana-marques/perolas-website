<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pérolas Website</title>
    

    <!-- IMPORT BOOTSTRAP SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <?php
        echo link_tag('assets/css/custom.css', 'stylesheet');
        //echo meta('description', '');
        //teste
        ?>
    <link rel="icon" href="<?= base_url('assets/img/favicon.png')?>" sizes="48x48"/> 
    <style>
        html:focus-within{
            scroll-behavior: smooth !important;
        }
        html{
            scroll-behavior: smooth !important;
        }
        
        .text-white{
            color: #f3f3f3 !important;
        }
        /* #ca98c3 */
        .navbar-light{
            background-color: #F4AFBD;
            color: #000 !important;
        }
        
        body{
            background-color: #f7f7f7;
            color: black;
            
        }
        
        .bg-secondary{
            /*color: #534d56;*/
            background-color: #3C2439!important;
        }
        
        .nav-link{
            color: #fff !important; 
            font-weight: normal;
        }
        
        .show{
            color: #f7f7f7 !important;
            
        }
        
        .btn-primary{
            background-color: #F4AFBD;
            border-color: #F4AFBD;
        }
        
        .btn-primary:hover{
            background-color: #E55175;
            border-color: #E55175;
        }
        
        .btn-dark{
            color: #E55175 !important;
        }
        
        .btn-dark:hover{
            color: #140C13 !important;
        }
        
        .btn-secondary{
            background-color: #f39cbc !important;
            border-color: #f39cbc !important;
        }
        
        footer a{
            color: #E55175;
            text-decoration: none;
        }
        
    </style>

</head>
<div>    
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="http://localhost/Ana/perolas-website/homepage"><img src="<?= base_url('assets/img/logo-softZoom.png') ?>" alt="Pérolas Logo" style="width: 3em; margin-left: 10px;"></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style>
            <ul class="navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link mr-2" href="<?= base_url('homepage') ?>" style="color: #f7f7f7; font-weight: 500;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href="http://localhost/Ana/perolas-website/homepage#produtos" style="color: #f7f7f7; font-weight: 500;">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href="<?= base_url('about') ?>" style="color: #f7f7f7; font-weight: 500;">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href="<?= base_url('contatar') ?>" style="color: #f7f7f7; font-weight: 500;">Contato</a>
                </li>
                <!-- <ul class="custom-control custom-switch d-flex align-items-center">
                    <input type="checkbox" class="custom-control-input" name="dark-mode" id="selector">
                    <label for="selector" class="custom-control-label text-white">Dark Mode</label>
                </ul> -->
            </ul>
        </div>
    </nav>
    <!-- <div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div> -->
    
</div>
