<?php // Versão 2.0
    include "buscaorganica/class.buscaorganica.php";
    // Parâmetros para URL
    $borg = new classBuscaOrganica(array(
        // URL local
        "http://localhost/_borg/base-busca-organica-clickTracking/",
        // URL online
        "http://aprovacao.buscaorganica.com.br/_dev/base_busca_ct/"
    ));

    // Principais Dados do Cliente
    $nome_empresa = "Nome da Empresa";
    $slogan       = "Slogan da Empresa";
    $emailContato = "email@dominio.com.br";

    // Variaveis para schema e site
    $dataDePublicacao = '13/03/2023';
    $dataDeModificacao = '08/03/2023';
    $facebook = "fb";
    $instagram = "ig";
    
    // Logo para o schema e site
    $logo_cliente = 'imagens/logo.png';
    $logo_buscaorganica = 'imagens/logo-buscaorganica.png';
    
    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "Nome da unidade",
            "rua" => "Rua",
            "bairro" => "Bairro",
            "cidade" => "Cidade",
            "estado" => "Estado",
            "uf" => "UF",
            "cep" => "CEPCEP-CEP",
            "latitude_longitude" => "321654 321654",
            "ddd" => "dd",
            "telefone" => "xxxx-xxxx", /* fixo sem ddd ex: 1313-1313 */
            "tel" => "(xx) xxxx-xxxx", /* fixo com ddd ex: (11) 1313-1313 */
            "link_tel" => "xxxxxxxxxx", /* fixo com ddd sem espaço ex: 1113131313 */
            "whatsapp" => "xxxxx-xxxx", /* whats sem ddd 91313-1313 */
            "wpp" => "(xx) xxxxx-xxxx", /* whats com ddd (11) 91313-1313 */
            "link_wpp" => "https://wa.me/55",
            "link_maps" => "https://linkmaps",
            "iframe_maps" => "iframe"
        )
    );
    // Numero do whatsapp do cliente para usar no botão da pagina de ranqueamento
    $whatsapp_botao = '+55';

    // Compilado de todos os telefones para schema
    $telefones_cliente = [
        $unidades[1]['tel'],
        $unidades[1]['wpp'],
    ];

    // Variáveis da head.php
    $url = $borg->url;
    $canonical = $borg->canonical;
    $meta_img    = $url . 'imagens/thumbs/' . $borg->formatStringToURL($title).'.jpg'; // mudar extensao se necessário
    
    $palavras_chave = array(
        "Palavra Chave Do Cliente", 
        "Palavra Chave Do Cliente", 
        "Palavra Chave Do Cliente", 
        "Palavra Chave Do Cliente", 
        "Palavra Chave Do Cliente", 
        "Palavra Chave Do Cliente"
    );
    
    //Pegar da instancia do analytics 
    $codigoAnalytics = 'UA-123456789-1';

    /*
        $usarListaThumbSemWeb
        No caso de true vai usar a Lista Thumb sem a extensão webp com img e nao com picture
    */ 
    $usarListaThumbSemWeb = true; /* false || true*/

    // CSS default
    $borg->css_files_default = array(
        "padroes/padronizacao",
        "padroes/grid-system",
        "padroes/slicknav-menu",
        "estilo-padrao",
        "elementos/fontawesome.min",
        "ferramentas/aviso-cookies",
        "ferramentas/gadget" //Cookies
    );

    // JS Default
    $borg->js_files_default = array(
        "padroes/jquery-3.6.0.min",
        "padroes/jquery.slicknav.min",
        "jquery.buscaorganica.padrao",
        "jquery.buscaorganica.custom",
        "tools/aviso-cookies.buscaorganica", //Cookies
        "tools/scroll",
    );

    $direitosAutorais = "<!-- Desenvolvido por Busca Orgânica | Site: www.buscaorganica.com.br | Email: contato@buscaorganica.com.br -->";
    $borg->breadcrumb_text_before_home = '<i class="fa-solid fa-house"></i>';
    
    /**
    * Outras Questões
    * 
    * Submenu
    * 
    * $opcoes = array(
    * "id" => "",
    * "class" => "",
    * "limit" => 9999,
    * "random" => false
    * );
    * 
    * $borg->subMenu($palavras_chave, $opcoes);
    * 
    */

    /**
    * Breadcrumb
    * 
    * -> Propriedades
    * 
    * Altera a url da Home no breadcrumb
    * $borg->breadcrumb_url_home = "";
    * 
    * Altera o texto que antecede a Home
    * $borg->breadcrumb_text_before_home = "";
    * 
    * Altera o texto da Home no breadcrumb
    * $borg->breadcrumb_text_home = "Home";
    * 
    * Altera o divisor de níveis do breadcrumb
    * $borg->breadcrumb_spacer = " » ";
    * 
    * -> Função
    * 
    * Cria o breadcrumb
    * $borg->breadcrumb(array("Informações", $h1));
    * 
    */

/**
    * Lista Thumbs
    * 
    * $opcoes = array(
    * "id" => "",
    * "class_div" => "col-md-3",
    * "class_section" => "",
    * "class_img" => "img-responsive",
    * "title_tag" => "h2",
    * "folder_img" => "imagens/thumbs/",
    * "extension" => "jpg",
    * "limit" => 9999,
    * "type" => 1,
    * "random" => false,
    * "text" => "",
    * "headline_text" => "Veja Mais"
    * );
    * 
    * 
    * $borg->listaThumbs($palavras_chave, $opcoes, $usarListaThumbSemWeb);
    * 
    */

/**
    * Funções Extras
    * 
    * $borg->formatStringToURL();
    * Reescreve um texto em uma URL válida
    * 
    */
    

