<?php extract($this->pnt, EXTR_PREFIX_ALL, 'pnt'); 


function translate_name_menu($pnt_menuActivado) {
    /**
     * Controla las traducciones de las tabs del menú
     */

    $result = '';

    switch ($pnt_menuActivado){

        case 'global': 
            $result = 'General';
            break;

        case 'menu': 
            $result = 'Menú';
            break;

        case 'colors': 
            $result = 'Colores';
            break;

        case 'fonts': 
            $result = 'Fuentes';
            break;

        case 'social': 
            $result = 'Redes Sociales';
            break;

        case 'custom': 
            $result = 'Código Personalizado';
            break;

        default:
            $result = ucfirst($pnt_menuActivado);
            break;
    }

    return $result;

}

?>

<div class="row m-0">
    <div class="col-md-12 px-1 m-0 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row position-relative m-0">

            <!-- Botón guardar cambios -->
            <button id="pnt-save" class="btn btn-success btn-pnt"><i class="fas fa-save"></i> Guardar</button>

                <div class="col-md-12 px-0">                
                    <?php
                    $bg_gradient = "
                    background: rgb(42,34,195);
                    background: -moz-linear-gradient(0deg, rgba(42,34,195,1) 0%, rgba(136,45,253,1) 100%);
                    background: -webkit-linear-gradient(0deg, rgba(42,34,195,1) 0%, rgba(136,45,253,1) 100%);
                    background: linear-gradient(0deg, rgba(42,34,195,1) 0%, rgba(136,45,253,1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2a22c3',endColorstr='#882dfd',GradientType=1);
                    ";
                    ?>

                    <div class="pnt-header pt-4" style="<?php echo $bg_gradient; ?>">
                        <div class="pnt-port">
                            <img src="<?php echo PNT_DIR_URI; ?>admin/img/panther.svg" alt="">
                        </div>
                        <div class="pnt-header-title">
                            <h4><i class="fas fa-cog"></i><span><?php echo translate_name_menu($pnt_menuActivado); ?></span></h4>
                        </div>                    
                    </div>
                </div>
            </div>

            <!-- Columna de navegación opciones tema -->
            <div class="row ml-0 justify-content-center">
                <div class="col-12 pl-0">
                    <ul class="pnt-menu nav">
                        <li>                            <!-- Guardamos la ultima pestaña usada, al actualizar -->
                            <a href="#pnt-global" class="<?php echo $pnt_menuActivado == 'global' ? 'active' : ''; ?>" data-menuActivado="global">
                            <i class="fas fa-cog"></i><span>General</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-header" class="<?php echo $pnt_menuActivado == 'header' ? 'active' : ''; ?>" data-menuActivado="header">
                            <i class="fas fa-window-maximize"></i><span>Header</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-sidebars" class="<?php echo $pnt_menuActivado == 'sidebars' ? 'active' : ''; ?>" data-menuActivado="sidebars">
                                <i class="fas fa-window-maximize fa-rotate-90"></i><span>Sidebars</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-footer" class="<?php echo $pnt_menuActivado == 'footer' ? 'active' : ''; ?>" data-menuActivado="footer">
                                <i class="fas fa-window-maximize fa-rotate-180"></i><span>Footer</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-menu" class="<?php echo $pnt_menuActivado == 'menu' ? 'active' : ''; ?>" data-menuActivado="menu">
                            <i class="fas fa-bars"></i><span>Menú</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-colors" class="<?php echo $pnt_menuActivado == 'colors' ? 'active' : ''; ?>" data-menuActivado="colors">
                            <i class="fas fa-paint-brush"></i><span>Colores</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-fonts" class="<?php echo $pnt_menuActivado == 'fonts' ? 'active' : ''; ?>" data-menuActivado="fonts">
                            <i class="fas fa-font"></i><span>Fuentes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-social" class="<?php echo $pnt_menuActivado == 'social' ? 'active' : ''; ?>" data-menuActivado="social">
                            <i class="fas fa-share-alt"></i><span>Redes Sociales</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-custom" class="<?php echo $pnt_menuActivado == 'custom' ? 'active' : ''; ?>" data-menuActivado="custom">
                            <i class="fas fa-code"></i><span>Código Personalizado</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contenido de la configuracion -->
                <div class="col-12 pl-0">
                    <form id="pnt-form">
                        <div id="pnt-form-content">

                            <input type="hidden" name="pnt[menuActivado]" id="pnt-menu-activado" value="<?php echo $pnt_menuActivado; ?>">

                            <!-- Configuraciones globales -->
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-colors.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-custom.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-fonts.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-footer.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-global.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-header.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-menu.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-sidebars.php'; ?>
                            <?php require_once PNT_DIR_PATH . 'admin/partials/forms-sections/pnt-social.php'; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>