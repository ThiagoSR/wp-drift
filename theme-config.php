<?php

/**
 * Configurações gerais do tema
*/
define( 'SITEURL', get_site_url() );
define( 'FONTS_DIR', get_stylesheet_directory_uri() . '/fontes' );


/**
 * Bibliotécas que serão utilizadas no site. Para melhor performance,
 * sugiro que depois de finalizado o site, ir no functions e definir 
 * condicionais de páginas para que as libs sejam carregadas 
 * apenas onde serão usadas.
 * 
 * Exemplo: is_page( 'contato' )
 * 
 */
define( 'MODAL_VIDEO_JS', false );
define( 'IMAGE_LIGHTBOX', false );
define( 'SLIM_SELECT', false );


/**
 * Configs do WooCommerce
 */
define( 'SUPORTE_WOOCOMMERCE', false );



/**
 * PWA / Mobile
 */
define( 'SUPORTE_PWA', true );
define( 'COR_BARRA_NAVEGADOR', '#000000' );