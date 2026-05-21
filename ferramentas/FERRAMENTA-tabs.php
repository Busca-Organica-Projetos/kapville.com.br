<?php
    $title       = "TABS";
    $description = "dasdsa"; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        "paginas/tabs",
        "elementos/style"
    ));
?>
</head>

<body>

  <?php include "includes/_header.php"; ?>

  <main class="main-content">
    <div class="box-bg-tabs"></div>

    <div class="container">
      <div class="tabs-regioes">
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h4>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-12 col-sx-12">
            <!-- Inicio menu Tabs -->
            <ul class="nav nav-tabs ajuste-tabs-menu">
              <li class="active"><a rel="nofollow" href="#tabs-1" data-toggle="tab"><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></a></li>
              <li><a rel="nofollow" href="#tabs-2" title="asdsa" data-toggle="tab"><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></a></li>
              <li><a rel="nofollow" href="#tabs-3" title="asdsa" data-toggle="tab"><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></a></li>
            </ul>
            <!-- Fim menu Tabs -->
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12 col-sx-12 tab-content">
            <div class="tab-pane fade in active" id="tabs-1">
              <ul>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
              </ul>
            </div>
            <div class="tab-pane fade" id="tabs-2">
              <ul>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
              </ul>
            </div>
            <div class="tab-pane fade" id="tabs-3">
              <ul>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
                <li><img class="img-responsive" src="<?php echo $url; ?>imagens/sem-imagem.jpg" alt="Imagem placeholder" loading="lazy"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php 
        $borg->js_custom = array(
            "tools/bootstrap.min",
        ); 
    ?>
  <?php include "includes/_footer.php"; ?>

</body>

</html>