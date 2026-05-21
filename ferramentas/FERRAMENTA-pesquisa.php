<?php
    $h1      	 = "Pesquisa";
    $title    	 = "Pesquisa de serviços do cliente";
    $description = ""; // Manter entre 130 a 160 caracteres
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        'ferramentas/pesquisa'
    ));
?>
</head>
<body>
    <?php include "includes/_header.php";?>
    <main class="main-content">
        <section class="padding-v-10">
            <div class="container">
                <?php // Retorna box de pesquisa
                    echo $borg->retornarBoxPesquisa(); 
                ?>
                <h1 class="align-center"><?php echo $h1; ?></h1>
            </div>
        </section>
        <section>
            <div class="container">
                    <?php
                    if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])) {
                        $pesquisa = trim($_POST['pesquisa']);
                        $retornoPesquisa = $borg->retornaPesquisa($palavras_chave, $pesquisa);
                        if (!empty($retornoPesquisa)) {
                            echo '<div class="enunciado-resultado-pesquisa"><i class="fa fa-search"></i> Sua pesquisa, <strong>'.$pesquisa.'</strong> retornou resultados:</div>';
                            echo '<div class="row lista-thumbs">';
                            echo    $retornoPesquisa;
                            echo '</div>';
                        } else {
                            echo '<div class="enunciado-resultado-pesquisa"><i class="fa fa-search"></i> Sua pesquisa, <strong>'.$pesquisa.'</strong> não retornou resultados. Tente novamente!</div>';
                        }
                    } else {
                        echo '<div class="enunciado-resultado-pesquisa"><i class="fa fa-search"></i> Faça sua pesquisa.</div>';
                    }    
                    ?>
            </div>
        </section>
    </main>
    <?php include "includes/_footer.php"; ?>
</body>
</html>