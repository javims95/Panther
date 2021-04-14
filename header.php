<?php

global $pnt, $pnt_master;


extract($pnt, EXTR_PREFIX_ALL, 'pnt');

$logoUrl    = $pnt_global['logoUrl'] == '' ? PNT_DIR_URI . 'public/img/panther.svg' : $pnt_global['logoUrl'];
$faviconUrl = $pnt_global['faviconUrl'] == '' ? PNT_DIR_URI . 'public/img/favicon.png' : $pnt_global['faviconUrl'];

// echo '<pre>';
// var_dump($logoUrl);
// var_dump($faviconUrl);
// echo '</pre>';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="short icon" href="<?php echo $faviconUrl; ?>">
    <link rel="icon" href="<?php echo $faviconUrl; ?>">

    <?php wp_head(); ?>
    <title>Document</title>
</head>

<body <?php body_class(); ?>>


    <?php if ($pnt_header['style'] == 'logoLeft') { ?>

        <!-- Mega-Menú -->
        <nav id="navbar-primary" class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="<?php echo $logoUrl; ?>"> &nbsp;<?php echo $pnt_global['textLogo']; ?>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">

                <?php
                if (has_nav_menu('pnt_menu_default')) {

                    wp_nav_menu([
                        'container'         => false,
                        'theme_location'    => 'pnt_menu_default',
                        'menu_class'        => 'navbar-nav',
                    ]);
                }
                ?>

            </div>
        </nav>

    <?php } elseif ($pnt_header['style'] == 'logoCentered') { ?>

        <!-- Mega-Menú -->
        <nav id="navbar-primary" class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand outside-nav" href="#">
                <img class="img-fluid" src="<?php echo $logoUrl; ?>"> &nbsp;<?php echo $pnt_global['textLogo']; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#centered_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pnt-centered" id="centered_nav">

                <?php
                if (has_nav_menu('pnt_menu_left')) {

                    wp_nav_menu([
                        'container'         => false,
                        'theme_location'    => 'pnt_menu_left',
                        'menu_class'        => 'navbar-nav',
                    ]);
                }
                ?>

                <a class="navbar-brand inside-nav mr-0" href="#">
                    <img class="img-fluid" src="<?php echo $logoUrl; ?>"> &nbsp;<?php echo $pnt_global['textLogo']; ?>
                </a>

                <?php
                if (has_nav_menu('pnt_menu_right')) {

                    wp_nav_menu([
                        'container'         => false,
                        'theme_location'    => 'pnt_menu_right',
                        'menu_class'        => 'navbar-nav',
                    ]);
                }
                ?>

            </div>
        </nav>

    <?php } ?>