<div class="box-btn-modal-orcamento">
    <p class="italic">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem repudiandae praesentium. Voluptate, dolore! Fugiat, aspernatur! Obcaecati nobis nemo natus ipsam magnam tenetur est magni ratione recusandae, sequi unde adipisci?
    </p>
    <p class="text-center">ou ligue para <strong>(<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></strong>.</p>
</div>
<div class="sidebar-main">
    <h3><a href="<?php echo $url; ?>blog/">Mais Posts</a></h3>
    <ul>
        <?php 
            echo $borg->subMenuBlog($paginasBlog, null, $tipoLista, $usarImagemBlogWebp); 
        ?>
    </ul>
</div>