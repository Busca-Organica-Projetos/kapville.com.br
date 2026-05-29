<?php
$h1           = "Home";
$title         = "Soluções em Capachos e Pisos";
$description = "A Kapville oferece capachos personalizados, tapetes, grama sintética e pisos fulget com qualidade, sofisticação e soluções sob medida para diversos ambientes.";
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/home"
    // "paginas/contato"
    // "ferramentas/fancybox"
    // "ferramentas/slick"
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <section id="banner">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12">
                        <div class="banner-wrapper">

                            <div class="banner-texto">
                                <h1 class="banner-titulo">
                                    Soluções Inteligentes<br>
                                    para Pisos e<br>
                                    Revestimentos
                                </h1>
                                <p class="banner-subtitulo">
                                    Capachos personalizados, grama sintética, piso Fulget e
                                    revestimentos com qualidade e sofisticação para seu projeto.
                                </p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de falar com um especialista.') ?>" target="_blank" rel="noopener" data-click-track="Fale com o Especialista - Banner - Home">
                                    Fale com o Especialista
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="quem-somos">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-5">
                        <div class="box-text">
                            <h2 class="titulo">Mas afinal,<br>quem somos?</h2>
                            <p class="descricao">
                                <strong>Tapete Capacho em Joinville</strong> – Somos uma empresa
                                joinvilense especializada na fabricação de capachos e tapetes sob
                                medida para condomínios, comércios e indústrias. Além disso,
                                trabalhamos com grama sintética decorativa e para jardins,
                                oferecendo também o serviço de instalação. Qualidade,
                                durabilidade e personalização para seu ambiente!
                            </p>
                            <p class="produtos">
                                <a href="<?php $url ?>#atuacao" data-click-track="Grama Sintética - Quem Somos - Home">Grama sintética</a> | <a href="<?php $url ?>#atuacao-capachos" data-click-track="Capachos - Quem Somos - Home">Capachos</a> | <a href="<?php $url ?>#atuacao-fulget" data-click-track="Piso Fulget - Quem Somos - Home">Piso Fuget</a>
                            </p>
                            <div class="info-loja">
                                <p class="loja-titulo">LOJA DE TAPETES EM JOINVILE</p>
                                <p class="loja-endereco">Rua Max Colin 2138 | América | Joinville</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="box-img">
                            <img src="<?php echo $url; ?>imagens/main/home/quem-somos/fachada.webp" alt="Fachada da loja Kapville em Joinville" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="atuacao" class="atuacao">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="box-text">
                            <h2 class="title-banner">Gramas Sintéticas de Alta Qualidade</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/atuacao/residencial.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Residencial</h2>
                                <p>A grama sintética residencial da Kapville é a solução ideal para transformar áreas externas e internas com beleza, conforto e praticidade. Perfeita para jardins, quintais e espaços de lazer, oferece aparência natural, fácil manutenção e excelente durabilidade para o dia a dia.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp']  . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de grama sintética para área residencial.')?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Grama Residencial - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/atuacao/animais.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Para Pets</h2>
                                <p>Escolha nossa grama sintética específica para animais de estimação e garanta mais conforto, praticidade e higiene para o seu ambiente. Desenvolvida para evitar manchas e odores, oferece fácil limpeza, alta durabilidade e um espaço agradável para os pets brincar em com segurança.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp']  . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de grama sintética para pet')?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Grama Pets - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/atuacao/esportivo.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Esportivo</h2>
                                <p>A grama sintética esportiva da Kapville é desenvolvida para oferecer alta resistência, segurança e excelente desempenho em áreas esportivas. Ideal para quadras, campos e espaços recreativos, proporciona conforto, durabilidade e baixa necessidade de manutenção.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp']  . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de grama sintética para área espotiva')?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Grama Esportiva - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsivo" src="<?php $url ?>imagens/main/home/atuacao/comercial.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Comercial</h2>
                                <p>A grama sintética comercial da Kapville é ideal para empresas, lojas e ambientes corporativos que buscam sofisticação, praticidade e ótima apresentação visual. Com alta resistência e baixa manutenção, proporciona um espaço moderno, agradável e sempre impecável.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de grama sintética para área comercial') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Grama Comercial - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        // ─── Imagens do carrossel da grama sintética ──────────────
        $gramasSinteticas = [
            "1_4_768x768_1_2_1x.webp",
            "download_1_1x.webp",
            "download_2_1x.webp",
            "download_3_1x.webp",
            "download_4_1x.webp",
            "download_5_1x.webp",
        ];
        ?>
        <section id="grama-sintetica">
            <div class="container">
                <div class="flex">

                    <!-- ─── Área 1: título + descrição curta ─── -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="area1">
                            <h2 class="kicker">GRAMA SINTÉTICA</h2>
                            <h2 class="titulo">Grama Sintética é um material versátil que pode ser usado para decoração, paisagismo, esportes e outros ambientes.</h2>
                            <p>
                                A <strong>grama sintética</strong> pode ser utilizada como um substituto da grama natural, mas também pode ser uma parte da decoração de ambientes
                            </p>
                        </div>
                    </div>

                    <!-- ─── Área 2: descrição extra + CTA ─── -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="area2">
                            <p>
                                A <strong style="color: white;">grama sintética na decoração</strong> apresenta inúmeros benefícios. Além da economia de tempo, você acaba economizando com a manutenção. A grama sintética é durável e não necessita de uma demasiada quantidade de tempo para a manutenção.
                            </p>
                            <p class="local">GRAMA SINTÉTICA JOINVILLE</p>
                            <a class="btn-catalogo" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de visualizar o catálogo de para grama sintética') ?>" target="_blank" rel="noopener" data-click-track="Visualizar Catálogo - Grama Sintética - Home">
                                Visualizar Catálogo
                            </a>
                            <a class="btn-orcamento" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de grama sintética') ?>" target="_blank" rel="noopener" data-click-track="Orçamento - Grama Sintética - Home">
                                Orçamento
                            </a>
                        </div>
                    </div>

                    <!-- ─── Área 3: carrossel na coluna direita ─── -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="area3">
                            <div class="carrossel-gramas">

                                <div class="carrossel-viewport">
                                    <div class="carrossel-track">
                                        <?php foreach ($gramasSinteticas as $idx => $img): ?>
                                            <div class="slide">
                                                <img src="<?php echo $url; ?>imagens/main/home/gramas-sinteticas/<?= $img ?>" alt="Grama sintética <?= $idx + 1 ?>" loading="<?= $idx === 0 ? 'eager' : 'lazy' ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <button class="prev" type="button" aria-label="Anterior">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                        <path fill="currentColor" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                    </svg>
                                </button>
                                <button class="next" type="button" aria-label="Próximo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="atuacao-capachos" class="atuacao">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="box-text">
                            <h2 class="title-banner">Soluções Inteligentes para Seu Espaço</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/capacho/residencial.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Residencial</h2>
                                <p>Os capachos residenciais da Kapville unem funcionalidade, estilo e personalidade para a entrada da sua casa. Desenvolvidos com materiais de alta qualidade, ajudam a manter o ambiente mais limpo enquanto valorizam a decoração com um toque exclusivo e sofisticado.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de capacho para área residencial') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Capacho Residencial - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/capacho/escolas.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Escolas</h2>
                                <p>Os capachos para escolas da Kapville são ideais para proporcionar mais limpeza, organização e segurança nos ambientes educacionais. Além de funcionais, podem ser personalizados com nomes, cores e identidade visual, valorizando a entrada com um toque profissional e acolhedor.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de capacho para escolas') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Capacho Escolas - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsivo" src="<?php $url ?>imagens/main/home/capacho/comercial.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Comercial</h2>
                                <p>Os capachos comerciais da Kapville são desenvolvidos para empresas que desejam unir limpeza, organização e fortalecimento da marca. Com alta durabilidade e possibilidade de personalização, oferecem uma excelente apresentação logo na entrada do ambiente comercial..</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de capacho para área comercial') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Capacho Comercial - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        /* ─── Imagens do carrossel de capachos personalizados ────── */
        $capachosPersonalizados = [
            "download_18_1x.webp",
            "download_19_1x.webp",
            "download_20_1x.webp",
            "download_21_1x.webp",
            "download_22_1x.webp",
            "download_23_1x.webp",
            "download_24_1x.webp",
            "download_25_1x.webp",
            "download_26_1x.webp",
            "download_27_1x.webp",
            "download_28_1x.webp",
            "download_29_1x.webp",
            "download_30_1x.webp",
            "new8_768x768_1_2_1x.webp",
        ];
        ?>
        <section id="capacho-personalizado">
            <div class="container">
                <div class="flex">

                    <!-- ─── Área 1: título + descrição curta ─── -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="area1">
                            <h2 class="kicker">PERSONALIZADOS</h2>
                            <h2 class="titulo">Capachos Personalizados Elegância e Funcionalidade para Sua Entrada!</h2>
                            <p>
                                <strong style="color: #fff;">Primeira Impressão que Marca!</strong> Seu capacho é a recepção do seu espaço. Personalize com seu <strong style="color: #fff;">logo, nome ou design exclusivo</strong> e garanta sofisticação e identidade para sua empresa ou residência.
                            </p>
                        </div>
                    </div>

                    <!-- ─── Área 2: descrição extra + CTA ─── -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="area2">
                            <p>
                                Capachos de Alta Qualidade, o melhor de Joinville e região. O melhor custo benefício, longa durabilidade e acabamento de primeira. Somente aqui na Kapville Kapachos, são mais de 2 mil clientes satisfeitos
                            </p>
                            <p>
                                Causar uma boa impressão logo na entrada de seu negócio, fortalecer a sua marca, auxiliar no controle da sujidade no ambiente diminuindo o custo com a limpeza interna a aquisição do capacho é primordial no seu negócio.
                            </p>
                            <p class="local">LOJA DE TAPETES JOINVILLE</p>
                            <a class="btn-catalogo" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de visualizar o catálogo de capachos personalizados') ?>" target="_blank" rel="noopener" data-click-track="Visualizar Catálogo - Capacho Personalizado - Home">
                                Visualizar Catálogo
                            </a>
                            <a class="btn-orcamento" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de capacho personalizado') ?>" target="_blank" rel="noopener" data-click-track="Orçamento - Capacho Personalizado - Home">
                                Orçamento
                            </a>
                        </div>
                    </div>

                    <!-- ─── Área 3: carrossel na coluna direita ─── -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="area3">
                            <div class="carrossel-gramas">

                                <div class="carrossel-viewport">
                                    <div class="carrossel-track">
                                        <?php foreach ($capachosPersonalizados as $idx => $img): ?>
                                            <div class="slide">
                                                <img src="<?php echo $url; ?>imagens/main/home/capacho/array/<?= $img ?>" alt="Capacho personalizado <?= $idx + 1 ?>" loading="<?= $idx === 0 ? 'eager' : 'lazy' ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <button class="prev" type="button" aria-label="Anterior">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                        <path fill="currentColor" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                    </svg>
                                </button>
                                <button class="next" type="button" aria-label="Próximo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="atuacao-fulget" class="atuacao">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="box-text">
                            <h2 class="title-banner">Acabamento Sofisticado em Piso Fulget</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/fulget/atuacao-fulget/residencial.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Residencial</h2>
                                <p>Os pisos fulget residenciais da Kapville são ideais para quem busca sofisticação, resistência e um acabamento moderno para áreas externas e internas. Com visual elegante e excelente durabilidade, proporcionam mais beleza, conforto e valorização para ambientes residenciais.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de piso fulget para área residencial') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Fulget Residencial - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/fulget/atuacao-fulget/comercial.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Comercial</h2>
                                <p>Os pisos fulget comerciais da Kapville oferecem resistência, sofisticação e excelente acabamento para empresas, lojas e ambientes corporativos. Ideais para áreas de grande circulação, unem durabilidade, segurança e visual moderno para valorizar qualquer espaço comercial.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de piso fulget para área comercial') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Fulget Comercial - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-card">
                                <img class="img-responsivo" src="<?php $url ?>imagens/main/home/fulget/atuacao-fulget/externo.webp" alt="residencial" loading="lazy">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 descricao-card">
                                <h2>Área Externa</h2>
                                <p>Os pisos fulget para áreas externas da Kapville combinam resistência, sofisticação e excelente acabamento para ambientes ao ar livre. Ideais para calçadas, varandas, jardins e áreas de lazer, oferecem alta durabilidade, visual moderno e fácil manutenção.</p>
                                <a class="banner-cta" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de piso fulget para área externa') ?>" target="_blank" rel="noopener" data-click-track="Solicitar Orçamento - Fulget Área Externa - Home">
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $capachosPersonalizados = [
            "download_6_1x.webp",
            "download_7_1x.webp",
            "download_8_1x.webp",
            "download_9_1x.webp",
            "download_10_1x.webp",
            "download_11_1x.webp",
            "download_12_1x.webp",
            "download_13_1x.webp",
            "download_14_1x.webp",
            "download_15_1x.webp",
            "download_16_1x.webp",
            "download_17_1x.webp"
        ];
        ?>
        <section id="piso-fulget">
            <div class="container">
                <div class="flex">

                    <!-- ─── Área 1: título + descrição curta ─── -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="area1">
                            <h2 class="kicker">PISO FUGET</h2>
                            <h2 class="titulo">Piso Fulget Beleza Natural e Alta Resistência para Seu Projeto!</h2>
                            <p>
                                <strong style="color: #fff;">Durabilidade e Estilo para Áreas Externas e Internas! </strong>O Piso Fulget é a escolha ideal para quem busca um acabamento Personalize com seu <strong style="color: #fff;"> elegante, antiderrapante, drenante e extremamente resistente,</strong> perfeito para calçadas, áreas de lazer, fachadas e muito mais.
                            </p>
                        </div>
                    </div>

                    <!-- ─── Área 2: descrição extra + CTA ─── -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="area2">
                            <p>
                                A <strong style="color: #fff;">Kapville</strong> se apresenta como uma solução inteligente e personalizável, feita sob medida para todos os projetos.
                            </p>
                            <p>
                                O objetivo é oferecer ao mercado alta qualidade estética e técnica aumentando o ciclo de vida dos produtos naturais. Oferecendo revestimentos Com diversificada gama de minerais naturais, nuances de cor e forma, asseguramos inovação e elevados padrões de qualidade.
                            </p>
                            <p class="local">PISO DRENANTE FUGET JOINVILLE</p>
                            <a class="btn-catalogo" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de visualizar o catálogo de pisos fuget'); ?>" target="_blank" rel="noopener" data-click-track="Visualizar Catálogo - Piso Fulget - Home">Visualizar Catálogo</a>
                            <a class="btn-orcamento" href="<?= $unidades[1]['link_wpp'] . urlencode('Olá, vim pelo site e gostaria de solicitar um orçamento de pisos fuget') ?>" target="_blank" rel="noopener" data-click-track="Orçamento - Piso Fulget - Home">
                                Orçamento
                            </a>
                        </div>
                    </div>

                    <!-- ─── Área 3: carrossel na coluna direita ─── -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="area3">
                            <div class="carrossel-gramas">

                                <div class="carrossel-viewport">
                                    <div class="carrossel-track">
                                        <?php foreach ($capachosPersonalizados as $idx => $img): ?>
                                            <div class="slide">
                                                <img src="<?php echo $url; ?>imagens/main/home/fulget/array/<?= $img ?>" alt="Capacho personalizado <?= $idx + 1 ?>" loading="<?= $idx === 0 ? 'eager' : 'lazy' ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <button class="prev" type="button" aria-label="Anterior">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                        <path fill="currentColor" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                    </svg>
                                </button>
                                <button class="next" type="button" aria-label="Próximo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="avaliacoes">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="box-title">
                            <h2 class="titulo">
                                O melhor atendimento e a máxima qualidade.<br>
                                Quem vive a experiência sempre indica a Kapville!
                            </h2>

                            <div class="logo-google">
                                <span class="pre">
                                    <span class="font">avaliações</span>
                                </span>
                                <span class="marca">
                                    <span class="g-b font">G</span><span class="g-r font">o</span><span class="g-y font">o</span><span class="g-b font">g</span><span class="g-g font">l</span><span class="g-r font">e</span><span class="kap font">Kapville</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                    $avaliacoes = [
                        1 => [
                            "img"        => "perfil1",
                            "nome"       => "Renato Ferreira",
                            "data"       => "2025-02-13",
                            "comentario" => "Estou muito satisfeito, pessoal super educado e atenciosos. Super recomendo. Com preços imbatíveis.",
                        ],
                        2 => [
                            "img"        => "perfil2",
                            "nome"       => "Ariele Cardoso",
                            "data"       => "2024-08-06",
                            "comentario" => "Produtos de excelente qualidade e atendimento nota 10!",
                        ],
                        3 => [
                            "img"        => "perfil3",
                            "nome"       => "Euclides Brum",
                            "data"       => "2024-06-20",
                            "comentario" => "Excelente atendimento e qualidade total nos produtos além de pontualidade na entrega e instalação 🔝🔝",
                        ],
                        4 => [
                            "img"        => "perfil4",
                            "nome"       => "Fernando Waldemiro Custodio",
                            "data"       => "2025-02-10",
                            "comentario" => "Show de bola o atendimento!",
                        ],
                        5 => [
                            "img"        => "perfil5",
                            "nome"       => "Kiki Rotert",
                            "data"       => "2024-07-05",
                            "comentario" => "Exclente empresa, entregam os produtos dentro do prazo pré estabelecido. Melhor custo benefício do mercado! Super indico!",
                        ],
                        6 => [
                            "img"        => "perfil6",
                            "nome"       => "jaidete vianna",
                            "data"       => "2024-06-19",
                            "comentario" => "Super recomendo a Kapville. Atendimento, instalação, pontualidade na entrega impecáveis. Estou muito satisfeita!!!",
                        ],
                        7 => [
                            "img"        => "perfil7",
                            "nome"       => "Diego Breguedo",
                            "data"       => "2024-11-12",
                            "comentario" => "Ótima loja, produtos revestimentos diversificadas com atendimento muito bom, pós venda sensacional..super indico a Kapville.",
                        ],
                        8 => [
                            "img"        => "perfil8",
                            "nome"       => "Tayane Mendonça",
                            "data"       => "2024-06-28",
                            "comentario" => "Recomendo, ótimo trabalho e preço justo!",
                        ],
                        9 => [
                            "img"        => "perfil9",
                            "nome"       => "Rodinei Mendes",
                            "data"       => "2024-06-13",
                            "comentario" => "Empresa seria, com excelente profissional, recomendo a todos. Sucesso a vocês.",
                        ],
                    ];
                    ?>
                    <div class="carrossel-avaliacoes">

                        <div class="carrossel-viewport">
                            <div class="carrossel-track">
                                <?php foreach ($avaliacoes as $idx => $av): ?>
                                    <div class="slide">
                                        <div class="card">
                                            <div class="header">
                                                <div class="col-lg-2">
                                                    <img class="perfil" src="<?php echo $url; ?>imagens/main/home/avaliacoes/<?= $av["img"] ?>.webp" alt="<?= htmlspecialchars($av['nome']) ?>" loading="lazy">
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="box-name">
                                                        <p class="name"><?= htmlspecialchars($av['nome']) ?></p>
                                                        <p class="data"><?= $av['data'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="icon-google">
                                                        <img src="<?php echo $url; ?>imagens/main/home/avaliacoes/logo-google.webp" alt="" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="stars">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="box-text">
                                                    <p><?= htmlspecialchars($av['comentario']) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <button class="prev" type="button" data-click-track="Avaliação Anterior - Avaliações - Home" aria-label="Avaliação anterior">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                <path fill="currentColor" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </button>
                        <button class="next" type="button" data-click-track="Próxima Avaliação - Avaliações - Home" aria-label="Próxima avaliação">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 320 512" aria-hidden="true">
                                <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="js/tools/carrossel-avaliacoes.js"></script>
    <?php
    $borg->js_custom = array(
        "tools/scroll",
        "tools/carrossel-gramas",
        "tools/carrossel-avaliacoes",
        // 'tools/jquery.fancybox',
        // 'tools/jquery.slick',
        //
        // 'tools/bootstrap.min',
        // 'tools/jquery.validate.min',
        // 'tools/jquery.mask.min',
        // 'tools/jquery.fancybox',
        // 'jquery.buscaorganica.contact'
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>