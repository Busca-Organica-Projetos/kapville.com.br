<?php
    $paginaPro =  substr(__FILE__, strrpos(__FILE__, '\\') + 1, -4);
    include "includes/buscaorganica/class.buscaorganica.db.php";
    $db = new classBuscaOrganicaDB();

    /*
        Configurações indexsação (Não alterar)
    */
    $urlRequisitada = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
    $depoisDaPagPadrao = explode($paginaPro.'/', $urlRequisitada);
    if (count($depoisDaPagPadrao) == 1) {
        $depoisDaPagPadrao = explode($paginaPro, $urlRequisitada);
    }
    echo "<pre>";
    print_r($depoisDaPagPadrao);
    echo "</pre>";
    exit();
    $canonical = $canonical.'/'.end($depoisDaPagPadrao);
    $urlSolicitada = end($depoisDaPagPadrao);
    $areaGeral = true;
    if (!empty($urlSolicitada)) {
        $areaGeral = false;
        $paginaRequisitada = $paginas[$urlSolicitada];
        $paginaRequisitada['urlSolicitada'] = $urlSolicitada;

        $h1      	 = $paginaRequisitada['title'];
        $title    	 = $paginaRequisitada['title'];
        $description = $paginaRequisitada['description']; // Manter entre 130 a 160 caracteres
        $keywords    = $paginaRequisitada['keywords'];
        $meta_img    = $borg->url . 'imagens/servicos/thumbs/' . $paginaRequisitada['image'];
    }





    $dbConn = $db->connProdCli(1);
    $servicos = json_decode($dbConn);

    echo "<pre>";
    print_r($servicos);
    echo "</pre>";
    exit();

    $title       = "Serviços";
    $description = "Em nossa página de informações você encontra diversos produtos e serviços, confira nossas categorias e informações de nossos produtos e serviços."; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        "paginas/informacoes"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content padding-50">
        <section class="container">
            <?php echo $borg->breadcrumb(array($title)); ?>
            <h1><?php echo $h1;?></h1>
            <p>Confira abaixo informações relacionadas a <strong><?php echo $nome_empresa; ?></strong>:</p>
            <div class="flex lista-thumbs">
                <?php echo $borg->listaThumbs($palavras_chave, array(
                    "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3",
                    "extension" => "jpg",
                ), $usarListaThumbSemWeb); ?>
            </div>
            <div class="lista-thumbs-expand-action ver-mais">
                <i class="fa fa-arrow-down"> <span>Ver Mais</span></i>
            </div>
            <div class="lista-thumbs-expand-action ver-menos none">
                <i class="fa fa-arrow-up"> <span>Ver Menos</span></i>
            </div>
        </section>
    </main>
    
    <?php include "includes/_footer.php"; ?>

     <script>
        $(".ver-mais").click(function() {
            $('.lista-thumbs').addClass('lista-thumbs-expand');
            $(this).fadeOut(200);
            $('.ver-menos').fadeIn(400);
        });
        $(".ver-menos").click(function() {
            $('.lista-thumbs').removeClass('lista-thumbs-expand');
            $(this).fadeOut(200);
            $('.ver-mais').fadeIn(400);
        });
    </script>
</body>
</html>