<?php

global $wpdb;

$panther_dir_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$panther_dir_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'PANTHER_DIR_PATH', $panther_dir_path );
define( 'PANTHER_DIR_URI',  $panther_dir_uri  );

require_once PANTHER_DIR_PATH . 'includes/class-panther-master.php';

function run_panther_master() {
    
    $bcpg_master = new PANTHER_Master;
    $bcpg_master->run();
    
}

run_panther_master();





























