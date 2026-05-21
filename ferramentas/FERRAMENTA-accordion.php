<?php

    $title       = "Accordion";
    $description = "Ferramenta slider com accordion para exibição de slides.";
    $h1          = $title;
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        "ferramentas/accordion"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <div class="container">
            <h1><?php echo $h1; ?></h1>
            <ol>
                <li>Adicionar a linha "tools/accordion" no <strong>cssCompress</strong>;</li>
                <li>Adicionar a class <kbd>.accordion</kbd> no elemento.</li>
            </ol>

            <hr>

            <div class="accordion">
                <ul>
                    <li>
                        <div> 
                            <a href="#">
                                <h2>Title 1</h2>
                                <p>Description 1</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div> 
                            <a href="#">
                                <h2>Title 2</h2>
                                <p>Description 2</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div> 
                            <a href="#">
                                <h2>Title 3</h2>
                                <p>Description 3</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div> 
                            <a href="#">
                                <h2>Title 4</h2>
                                <p>Description 4</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div> 
                            <a href="#">
                                <h2>Title 5</h2>
                                <p>Description 5</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div> 
                            <a href="#">
                                <h2>Title 6</h2>
                                <p>Description 6</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php include "includes/_footer.php"; ?>
</body>
</html>