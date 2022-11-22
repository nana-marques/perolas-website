<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php echo link_tag('assets/css/custom.css', 'stylesheet'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <style>
        html:focus-within{
            scroll-behavior: smooth !important;
        }

        .text-white{
            color: #f3f3f3 !important;
        }
        /* #ca98c3 */
        .navbar-light{
            background: linear-gradient(#ca98c3, #d5adcf);
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
            color: #000 !important; 
            font-weight: normal;
        }

        .show{
            color: #f7f7f7 !important;

        }

        .btn-primary{
            background-color: #c289ba;
            border-color: #c289ba;
        }

        .btn-primary:hover{
            background-color: #8d4883;
            border-color: #8d4883;
        }

        .btn-dark{
            color: #ca98c3 !important;
        }

        .btn-dark:hover{
            color: #140C13 !important;
        }

        .btn-secondary{
            background-color: #f26a8e !important;
            border-color: #f26a8e !important;
        }

    </style>
</head>
<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img src="assets/img/logoFundo.png" alt="Pérolas Logo" style="width: 55px; margin-left: 15px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto flex-nowrap navbar-right">
                <a class="nav-item nav-link mr-2" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link mr-2" href="#">Produtos</a>
                <a class="nav-item nav-link mr-2" href="#">Sobre Nós</a>
                <a class="nav-item nav-link mr-2" href="#">Contato</a>
                <!-- <div class="custom-control custom-switch d-flex align-items-center">
                    <input type="checkbox" class="custom-control-input" name="dark-mode" id="selector">
                    <label for="selector" class="custom-control-label text-white">Dark Mode</label>
                </div> -->
            </div>
        </div>
    </nav>
    <!-- <div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div> -->
</header>
<body>