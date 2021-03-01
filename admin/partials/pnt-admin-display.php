<?php extract($this->pnt, EXTR_PREFIX_ALL, 'pnt'); ?>

<div class="row m-0">
    <div class="col-md-12 px-1 m-0 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row position-relative m-0">

            <!-- Botón guardar cambios -->
            <button class="btn btn-success btn-pnt"><i class="fas fa-save"></i> Guardar</button>

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
                            <h4><i class="fas fa-cog"></i><span>Opciones</span></h4>
                        </div>                    
                    </div>
                </div>
            </div>

            <!-- Columna de navegación opciones tema -->
            <div class="row ml-0 justify-content-center">
                <div class="col-12 pl-0">
                    <ul class="pnt-menu nav">
                        <li>
                            <a href="#pnt-global" class="active" data-menuActivado="global">
                            <i class="fas fa-cog"></i><span>Opciones</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-header" class="" data-menuActivado="header">
                            <i class="fas fa-window-maximize"></i><span>Header</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-sidebars" class="" data-menuActivado="sidebars">
                                <i class="fas fa-window-maximize fa-rotate-90"></i><span>Sidebars</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-footer" class="" data-menuActivado="footer">
                                <i class="fas fa-window-maximize fa-rotate-180"></i><span>Footer</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-menu" class="" data-menuActivado="menu">
                            <i class="fas fa-bars"></i><span>Menú</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-colors" class="" data-menuActivado="colores">
                            <i class="fas fa-paint-brush"></i><span>Colores</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-fonts" class="" data-menuActivado="fuentes">
                            <i class="fas fa-font"></i><span>Fuentes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-social" class="" data-menuActivado="social">
                            <i class="fas fa-share-alt"></i><span>Redes Sociales</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pnt-custom" class="" data-menuActivado="custom">
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