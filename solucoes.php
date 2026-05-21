<?php
$h1          = "Soluções";
$title       = "Soluções";
$description = "Conheça a linha de desumidificadores Desidrat na Kapville: combate ao mofo, controle de umidade e proteção dos seus ambientes."; // Manter entre 130 a 160 caracteres
$keywords    = "desumidificador, desidrat, soluções, kapville, controle de umidade";

require_once "includes/array-solucoes.php";
include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/home",
    "paginas/solucoes"
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <section id="solucoes-banner" aria-labelledby="solucoes-titulo">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <h1 id="solucoes-titulo" class="sr-only"><?= $h1 ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <div id="linha">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <img class="img-responsive" src="<?php echo $url; ?>imagens/main/solucoes/linha.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
        <section id="produtos" aria-labelledby="produtos-titulo">
            <div class="container">
                <h2 id="produtos-titulo" class="sr-only">Nossos Desumidificadores</h2>
                <div class="flex">
                    <?php foreach ($produtos as $nome => $dados): ?>
                        <?= $dados['content'] ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </main>
    <?php
    $borg->js_custom = array(
        "tools/scroll",
        "tools/carrossel-gramas",
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>