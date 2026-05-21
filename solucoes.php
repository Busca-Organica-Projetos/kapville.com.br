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
        <section id="solucoes-banner">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">

                    </div>
                </div>
            </div>
        </section>
        <section id="linha">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <img class="img-responsive" src="<?php $url ?>imagens/main/solucoes/linha.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="produtos">
            <div class="container">
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