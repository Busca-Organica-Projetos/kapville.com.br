<ul>
    <li><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
    <li><a href="<?php echo $url; ?>empresa" title="Empresa">Sobre Nós</a></li>
    <li><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
    <li><a href="<?php echo $url; ?>informacoes" title="Informações">Informações</a>
        <ul>
            <?php echo $borg->subMenu($palavras_chave); ?>
        </ul>
    </li>
</ul>