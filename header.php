<?php

// De esta forma tenemos acceso a todas las variables del JSON
global $pnt, $pnt_master;
extract($pnt, EXTR_PREFIX_ALL, 'pnt');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="short icon" href="<?php echo $pnt_global['faviconUrl'] == '' ? PNT_DIR_URI . 'public/img/favicon/favicon.png' : $pnt_global['faviconUrl']; ?>">
    <link rel="icon" href="<?php echo $pnt_global['faviconUrl'] == '' ? PNT_DIR_URI . 'public/img/favicon/favicon.png' : $pnt_global['faviconUrl']; ?>">

    <?php wp_head(); ?>
    <title>Document</title>
</head>

<body id="default_theme" <?php body_class(); ?> class="it_service">
    <!-- loader -->
    <div class="bg_load">
        <img class="loader_animation" src="<?php echo PNT_DIR_URI . 'public/img/loaders/letter-panther.png'; ?>" alt="#" />
    </div>
    <!-- end loader -->
    <!-- header -->
    <header id="default_header" class="header_style_1">
        <!-- header top -->
        <div class="header_top">
            <div class="container">
                <div class="row row-nowrap">
                    <div class="col-md-8">
                        <div class="full">
                            <div class="topbar-left">
                                <ul class="list-inline">
                                    <li>
                                        <span class="topbar-label">
                                            <i class="fa  fa-home"></i>
                                        </span>
                                        <span class="topbar-hightlight">
                                            <?php echo $pnt_menu['address'] == ''
                                                ? 'Calle Marqués de Larios 25, 29003, Málaga'
                                                : $pnt_menu['address']; ?>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="topbar-label">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="topbar-hightlight">
                                            <a href="mailto:
                                                <?php echo $pnt_menu['mail'] == ''
                                                    ? 'info@panther.es'
                                                    : $pnt_menu['mail'] ?>">
                                                <?php echo $pnt_menu['mail'] == ''
                                                    ? 'info@panther.es'
                                                    : $pnt_menu['mail']; ?>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 right_section_header_top text-center">

                        <?php if (isset($pnt_social['show'])) { ?>

                            <div class="float-right social_icon">
                                <ul class="list-inline">
                                    <li><a class="fab fa-facebook-square fa-2x" href="<?php echo $pnt_social['facebook'] == '' ? 'https://www.facebook.com/' : $pnt_social['facebook'] ?>" title="Facebook" target="_blank"></a></li>
                                    <li><a class="fab fa-twitter-square fa-2x" href="<?php echo $pnt_social['twitter'] == '' ? 'https://www.twitter.com/' : $pnt_social['twitter'] ?>" title="Twitter" target="_blank"></a></li>
                                    <li><a class="fab fa-instagram fa-2x" href="<?php echo $pnt_social['instagram'] == '' ? 'https://www.instagram.com/' : $pnt_social['instagram'] ?>" title="Instagram" target="_blank"></a></li>
                                    <li><a class="fab fa-youtube fa-2x" href="<?php echo $pnt_social['youtube'] == '' ? 'https://www.youtube.com/' : $pnt_social['youtube'] ?>" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="fab fa-google-plus-square fa-2x" href="<?php echo $pnt_social['googleplus'] == '' ? 'https://plus.google.com/' : $pnt_social['googleplus'] ?>" title="Instagram" target="_blank"></a></li>
                                    <li><a class="fab fa-linkedin fa-2x" href="<?php echo $pnt_social['linkedin'] == '' ? 'https://es.linkedin.com/' : $pnt_social['linkedin'] ?>" title="Instagram" target="_blank"></a></li>
                                </ul>
                            </div>

                        <?php } else { ?>
                            <div class="make_appo"> <a class="btn white_btn" href="mailto:<?php echo $mail ?>">Concertar una cita</a> </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top -->
        <!-- header bottom -->
        <div class="header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <!-- logo start -->
                        <div class="logo"> <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $pnt_global['logoUrl'] == '' ? PNT_DIR_URI . 'public/img/logos/letter-panther.svg' : $pnt_global['logoUrl']; ?>" alt="logo" /></a> </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <!-- menu start -->
                        <div class="menu_side">
                            <div id="navbar_menu">

                                <!-- Menú dinámico -->
                                <?php
                                if (has_nav_menu('pnt_menu_default')) {

                                    wp_nav_menu([
                                        'container'         => false,
                                        'theme_location'    => 'pnt_menu_default',
                                        'menu_class'        => 'first-ul',
                                        'walker'            =>  $pnt_master->pnt_public->get_instance_navwalker()
                                    ]);
                                }
                                ?>

                            </div>
                            <div class="search_icon">
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom end -->
    </header>
    <!-- end header -->