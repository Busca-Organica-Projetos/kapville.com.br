<?php // Versão 2.0
    session_start();
    include "buscaorganica/class.buscaorganica.php";
    // Parâmetros para URL
    $borg = new classBuscaOrganica(array(
        // URL local
        "http://localhost/_Dev/kapville.com.br/",
        // URL online
        "https://aprov.buscaorganica.com.br/kapville.com.br/"
    ));

    // Principais Dados do Cliente
    $nome_empresa = "Kapville";
    $slogan       = "CAPACHOOS E PISO";
    $emailContato = "kapvillekapachos@gmail.com";

    // Variaveis para schema e site
    $dataDePublicacao = '13/03/2023';
    $dataDeModificacao = '08/03/2023';
    $facebook = "https://pt-br.facebook.com/kapvillekapachos";
    $instagram = "https://www.instagram.com/kapville";
    
    // Logo para o schema e site
    $logo_cliente = 'imagens/logo.webp';
    $logo_buscaorganica = 'imagens/logo-buscaorganica.png';
    
    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "JONY ERNESTO JUST",
            "rua" => "Rua Mário Lobo, 61",
            "bairro" => "Centro",
            "cidade" => "Joinville",
            "estado" => "Santa Catarina",
            "uf" => "SC",
            "cep" => "89201-330",
            "latitude_longitude" => "-26.299494869703327, -48.84852028525765",
            "ddd" => "47",
            "telefone" => "98840-7007", /* fixo sem ddd ex: 1313-1313 */
            "tel" => "(47) 98840-7007", /* fixo com ddd ex: (11) 1313-1313 */
            "link_tel" => "47988407007", /* fixo com ddd sem espaço ex: 1113131313 */
            "whatsapp" => "98840-7007", /* whats sem ddd 91313-1313 */
            "wpp" => "(47) 98840-7007", /* whats com ddd (11) 91313-1313 */
            "link_wpp" => "https://wa.me/5547988407007?text=", /*Adicionar a seguinte mensagem após inserir o número: ?text= */
            "link_maps" => "https://maps.app.goo.gl/FoEsvKzvTUTU9HGP8",
            "iframe_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5896.172399796436!2d-48.85757542229005!3d-26.299773799999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb037bc2cbccd%3A0x7c56b73c72c29617!2sEdif%C3%ADcio%20Terra%C3%A7o%20Center!5e1!3m2!1spt-BR!2sbr!4v1779127911823!5m2!1spt-BR!2sbr"
        )
    );
    // Numero do whatsapp do cliente para usar no botão da pagina de ranqueamento
    $whatsapp_botao = '+55';

    //Endereço
    $low_adress = $unidades[1]['rua'] . " - " . $unidades[1]['bairro'] . " - " . $unidades[1]['cidade'];
    $full_adress = $unidades[1]['rua'] . " - " . $unidades[1]['bairro'] . " - " . $unidades[1]['cidade'] . $unidades[1]['uf'] . " - " . $unidades[1]['cep'];

    //Mensagens Padrão
    $msg_padrao_wpp = urlencode('Olá, vim pelo site e gostaria de mais informações!');

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
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave",
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
        "ferramentas/gadget", //Cookies
    );

    // JS Default
    $borg->js_files_default = array(
        "padroes/jquery-3.6.0.min",
        "padroes/jquery.slicknav.min",
        "jquery.buscaorganica.padrao",
        "jquery.buscaorganica.custom",
        "tools/aviso-cookies.buscaorganica", //Cookies
        "tools/scroll",
        "tools/fontawesome",
    );

    $direitosAutorais = "<!-- Desenvolvido por Busca Orgânica | Site: www.buscaorganica.com.br | Email: contato@buscaorganica.com.br -->";
    include "buscaorganica/head.buscaorganica.min.php";

    
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
    

