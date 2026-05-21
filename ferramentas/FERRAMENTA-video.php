<?php

    $title       = "Área de Vídeo";
    $description = "Ferramenta de video asíncrono";
    $h1          = $title;
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        "ferramentas/video"
    ));
    
?>
</head>
<body>
    <?php include "includes/_header.php"; ?>
    <main class="padding-100">
        <div id="video-empresa" class="video">
            <div class="iframe-div" data-video='w2jU_jb1nKE'>
                <!-- carregado pelo js - mudar data-video -->
            </div>
            <div class="img-iframe">
                <img src="<?=$url; ?>imagens/main/contato/banner-quem.jpg" alt="<?=$title;?>" class="img-responsive" loading="lazy">
                <button class="show"><i class="fa-regular fa-circle-play" style="color: rgb(35, 23, 169);"></i></button>
            </div>
        </div>
    </main>
    <?php 
        $borg->js_custom = array(
            "tools/jquery.video"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
</body>
</html>
