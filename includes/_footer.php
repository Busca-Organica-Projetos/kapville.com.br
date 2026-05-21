<div class="outras-paginas">
    <!-- <div class="container">
        <h3>Outras <span>páginas</span></h3>
        <div class="row">
        <ul>
            <?php
            echo $borg->subMenu($palavras_chave);
            ?>
        </ul>
        </div>
    </div> -->
</div>
<footer>
    <div class="container">
        <div class="flex not-a">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 align-self logo-footer">
                <a href="<?php echo $url; ?>" title="<?php echo $nome_empresa; ?>"><img src="<?php echo $url.$logo_cliente; ?>" alt="<?php echo $nome_empresa; ?>" title="<?php echo $nome_empresa; ?>" class="img-responsive" loading="lazy"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <h4>Institucional</h4>
                <ul>
                    <li><i class="fa-solid fa-angle-right info"></i><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
                    <li><i class="fa-solid fa-angle-right info"></i><a href="<?php echo $url; ?>#about" title="Sobre Nós">Sobre Nós</a></li>
                    <li><i class="fa-solid fa-angle-right info"></i><a href="<?php echo $url; ?>produtos" title="Produtos">Produtos</a></li>
                    <li><i class="fa-solid fa-angle-right info"></i><a href="<?php echo $url; ?>#contact" title="Contato">Contato</a></li>
                    <li><i class="fa-solid fa-angle-right info"></i><a href="<?php echo $url; ?>informacoes" title="Informações">Informações</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <h4>Contato</h4>
                <ul>
                    <li><i class="fa-solid fa-phone-volume"></i><a data-click-track="Telefone - Contato - Rodapé" href="<?php echo $unidades[1]['link_tel']; ?>" title="Clique e Ligue"><?php echo $unidades[1]['tel']; ?></a></li>
                    <li><i class="fa-brands fa-whatsapp"></i><a data-click-track="WhatsApp - Contato - Rodapé" href="<?php echo $unidades[1]['link_wpp']; ?>" title="WhatsApp" target="_blank"><?php echo $unidades[1]['wpp']; ?></a></li>
                    <li><i class="fa-solid fa-envelope"></i><a data-click-track="E-mail - Contato - Rodapé" href="mailto:<?php echo $emailContato; ?>" title="E-Mail" target="_blank"><?php echo $emailContato; ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4>Localização</h4>
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i><a href="<?php echo $unidades[1]['link_maps']; ?>" title="Acesse no Google Maps" target="_blank"><?php echo $unidades[1]['rua'].' - '.$unidades[1]['bairro'].' - '.$unidades[1]['cidade'].' / '.$unidades[1]['uf'].' - CEP: '.$unidades[1]['cep']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include ('includes/whats-button.php'); ?>
    <div class="footer-selos">
        <div class="container">
            <div class="flex">
                <div class="col-md-6 footer-empresa">
                    <?php echo $nome_empresa . ' - ' . $slogan;?>
                </div>
                <div class="col-md-6">
                    <div class="selos">
                        <div class="hidden-selos">
                            <a class="selos-validacao" rel="nofollow" href="<?php echo $url; ?>mapa-site" target="_blank"
                                title="Mapa do Site">
                                <i class="fas fa-sitemap"></i>
                            </a>
                            <a class="selos-validacao" rel="nofollow" href="http://validator.w3.org/check?uri=<?php echo $canonical; ?>" target="_blank"
                                title="HTML 5 - Site Desenvolvido nos padrões W3C">
                                <img src="https://www.buscaorganica.com.br/ast/img/selo-html-5.jpg" alt="HTML 5" loading="lazy">
                            </a>
                            <a class="selos-validacao" rel="nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $canonical; ?>"
                                target="_blank" title="CSS 3 - Site Desenvolvido nos padrões W3C">
                                <img src="https://www.buscaorganica.com.br/ast/img/selo-css-3.jpg" alt="CSS 3" loading="lazy">
                            </a>
                            <a class="selos-validacao" rel="nofollow" href="https://search.google.com/test/mobile-friendly?hl=PT&amp;url=<?php echo $canonical; ?>"
                                target="_blank" title="Compatível com dispositivos móveis">
                                <img src="https://www.buscaorganica.com.br/ast/img/selo-dispositivo-movel.jpg" alt="Dispositivos Móveis" loading="lazy">
                            </a>
                        </div>
                        <a rel="noopener" href="https://www.buscaorganica.com.br"
                            target="_blank" title="Busca Orgânica - Crescimento para sua empresa através do Google">
                            <img src="https://www.buscaorganica.com.br/ast/img/selo-busca-organica.png" alt="Busca Orgânica" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="menu-footer-mobile">
        <li>
            <a data-click-track="Telefone - Mobile - Rodapé" href="tel:<?php echo $unidades[1]["ddd"].$unidades[1]["telefone"]; ?>" class="mm-call" title="Ligue"><i class="fa fa-phone-alt"></i></a>
        </li>
        <li>
            <a data-click-track="WhasApp - Mobile - Rodapé" href="https://wa.me//<?php echo $whatsapp_botao;?>?text=Olá,%20vim%20do%20site%20e%20preciso%20de%20informações!" class="mm-whatsapp" title="Whats App"><i class="fab fa-whatsapp"></i></a>
        </li>
        <li>
            <a data-click-track="E-mail - Mobile - Rodapé" href="mailto:<?php echo $emailContato; ?>" class="mm-email" title="E-mail"><i class="fa fa-envelope"></i></a>
        </li>
        <li>
            <button type="button" class="mm-up-to-top" title="Volte ao Topo"><i class="fa fa-arrow-circle-up"></i></button>
        </li>
    </ul>
    <?php include('includes/aviso-cookies.php'); ?>
</footer>
<?php if($_SERVER["SERVER_NAME"] != "localhost"){ ?>
    <!-- Código do Analytics aqui! -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $codigoAnalytics;?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo $codigoAnalytics;?>');
    </script>
<?php } ?>
<?php 
    $borg->js_custom[] = "jquery.buscaorganica.ambedFacebook";
    
    $borg->jsCompress();

    if($_SERVER["SERVER_NAME"] != "localhost"){ 
        include('assets/js/jquery.clicktraking.php');
    }
