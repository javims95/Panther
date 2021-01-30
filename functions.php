<?php

global $wpdb;

$panther_dir_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$panther_dir_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'PANTHER_DIR_PATH', $panther_dir_path );
define( 'PANTHER_DIR_URI',  $panther_dir_uri  );

/**
 * Funciones para activar/desactivar el tema
 * Carga un archivo de configuración inicial
 */
function activate_panther() {
    require_once PANTHER_DIR_PATH. 'includes/class-panther-activator.php';
    PANTHER_Activator::activate();
}

function deactivate_panther() {
    require_once PANTHER_DIR_PATH. 'includes/class-panther-deactivator.php';
    PANTHER_Deactivator::deactivate();
}
add_action('after_switch_theme', 'activate_panther');
add_action('switch_theme', 'deactivate_panther');


require_once PANTHER_DIR_PATH . 'includes/class-panther-master.php';

function run_panther_master() {
    
    $bcpg_master = new PANTHER_Master;
    $bcpg_master->run();
    
}

run_panther_master();