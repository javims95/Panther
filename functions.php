<?php

global $wpdb;

$pnt_dir_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$pnt_dir_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'PNT_DIR_PATH', $pnt_dir_path );
define( 'PNT_DIR_URI',  $pnt_dir_uri  );

/**
 * Funciones para activar/desactivar el tema
 * Carga un archivo de configuración inicial
 */
function activate_pnt() {
    require_once PNT_DIR_PATH. 'includes/class-pnt-activator.php';
    PNT_Activator::activate();
}

function deactivate_pnt() {
    require_once PNT_DIR_PATH. 'includes/class-pnt-deactivator.php';
    PNT_Deactivator::deactivate();
}
add_action('after_switch_theme', 'activate_pnt');
add_action('switch_theme', 'deactivate_pnt');


require_once PNT_DIR_PATH . 'includes/class-pnt-master.php';

function run_pnt_master() {

    global $pnt_master, $pnt;
    $pnt    = get_option('pnt_config');
    
    $pnt_master = new PNT_Master;
    $pnt_master->run();
    
}

run_pnt_master();