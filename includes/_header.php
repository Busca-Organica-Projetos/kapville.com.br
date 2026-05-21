<header class="header-background">
    <nav>
        <?php include('includes/top-header.php'); ?>
        <div class="header-container-main">
            <div class="logo">
                <a href="<?php echo $url; ?>" title="<?php echo $h1 . " - " . $nome_empresa; ?>">
                    <span>
                        <picture>
                            <source type="image/png" srcset="<?php echo $url; ?><?php echo $logo_cliente; ?>">
                            <img src="<?php echo $url . $logo_cliente; ?>" alt="<?php echo $nome_empresa; ?>" title="<?php echo $nome_empresa; ?>" class="img-responsive">
                        </picture>
                    </span>
                </a>
            </div>
            <div class="menu">
                <ul class="menu-list gap-10">
                    <li class="<?php echo $canonical ==  $url ? 'pagina-focus' : ''; ?>"><a href="<?php echo $url; ?>" title="Página inicial">Kapville</a></li>
                    <li class="<?php echo $canonical ==  $url . '#capacho-personalizado' ? 'pagina-focus' : ''; ?>"><a href="<?php echo $url; ?>#capacho-personalizado" title="Capacho Personalizado">Capacho Personalizado</a></li>
                    <li class=""><a href="<?php echo $url; ?>#fuget-banner" title="Piso Fuget">Piso Fuget</a></li>
                    <li class=""><a href="<?php echo $url; ?>#grama-sintetica" title="Grama Sintética">Grama Sintética</a></li>
                    <li class=""><a href="<?php echo $url; ?>solucoes" title="Soluções">Soluções</a></li>
                    <li class="<?php echo $canonical ==  $url . 'contato' ? 'pagina-focus' : ''; ?>"><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
                    <!-- <li class="linfo">
                        <a href="<?php echo $url; ?>informacoes" title="Informações"><i class="fa fa-info linfo-i"></i></a>
                        <ul class="sub-menu">
                            <?php echo $borg->subMenu($palavras_chave); ?>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>