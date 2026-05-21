<?php

/*
    Definir tipo de submenu -> lista || thumb
*/
$tipoLista = 'thumb'; // thumb || lista

/*
    Setar páginas para blog carregar dinamicamente
*/
$paginas = $servicos['dados'];

/*
    Configurações indexsação (Não alterar)
*/
$urlRequisitada = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$depoisDoBlog = explode('servicos/',$urlRequisitada);
if (count($depoisDoBlog) == 1) {
    $depoisDoBlog = explode('servicos',$urlRequisitada);
}
$canonical = $canonical.'/'.end($depoisDoBlog);
$urlSolicitada = end($depoisDoBlog);
$areaGeral = true;
if (!empty($urlSolicitada)) {
    $areaGeral = false;
    $paginaRequisitada = $paginas[$urlSolicitada];
    $paginaRequisitada['urlSolicitada'] = $urlSolicitada;

    $h1      	 = $paginaRequisitada['title'];
    $title    	 = $paginaRequisitada['title'];
    $description = $paginaRequisitada['description']; // Manter entre 130 a 160 caracteres
    $keywords    = $paginaRequisitada['keywords'];
    $meta_img    = $borg->url . 'imagens/servicos/thumbs/' . $paginaRequisitada['image'];
}

/*
    $usarImagemWebp
    No caso de true ele vai usar o picture
    no caso de false apenas o img
*/ 
$usarImagemBlogWebp = false; /* true || false */

?>