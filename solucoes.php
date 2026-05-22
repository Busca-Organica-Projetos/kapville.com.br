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

/* ─── Helpers para a sidebar (slug + label curto do produto) ─── */
function solucoes_slug($texto) {
    $tr = ['á'=>'a','à'=>'a','â'=>'a','ã'=>'a','ä'=>'a',
           'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
           'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
           'ó'=>'o','ò'=>'o','ô'=>'o','õ'=>'o','ö'=>'o',
           'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
           'ç'=>'c','ñ'=>'n',
           'Á'=>'a','É'=>'e','Í'=>'i','Ó'=>'o','Ú'=>'u','Ç'=>'c'];
    $texto = strtr(mb_strtolower($texto, 'UTF-8'), $tr);
    $texto = preg_replace('/[^a-z0-9]+/', '-', $texto);
    return trim($texto, '-');
}

function solucoes_modelo_curto($nome) {
    /* "Desumidificador de ar Desidrat Compact Íon – Ionizador – … – Thermomatic"
       → "Compact Íon" */
    if (preg_match('/Desidrat\s+([^–-]+?)\s*[–-]/u', $nome, $m)) {
        return trim($m[1]);
    }
    return $nome;
}
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
                        <img class="img-responsive" src="<?php echo $url; ?>imagens/main/solucoes/linha.webp" alt="Linha decorativa separadora" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <aside class="sidebar-solucoes" aria-label="Navegação entre produtos">
            <div class="sidebar-header">
                <p>Navegação</p>
            </div>
            <ul>
                <?php foreach ($produtos as $nome => $dados): ?>
                    <?php $slug = solucoes_slug(solucoes_modelo_curto($nome)); ?>
                    <li>
                        <a href="#<?= $slug ?>" title="<?= htmlspecialchars($nome) ?>">
                            <?= htmlspecialchars(solucoes_modelo_curto($nome)) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <section id="produtos" aria-labelledby="produtos-titulo">
            <div class="container">
                <h2 id="produtos-titulo" class="sr-only">Nossos Desumidificadores</h2>
                <div class="flex">
                    <?php foreach ($produtos as $nome => $dados): ?>
                        <?php $slug = solucoes_slug(solucoes_modelo_curto($nome)); ?>
                        <div id="<?= $slug ?>" class="produto-anchor">
                            <?= $dados['content'] ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    
    <?php
    $borg->js_custom = array(
        "tools/scroll",
        "tools/carrossel-gramas",
        "tools/sidebar-solucoes",
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>