<div class="row">
    <div class="col-12 pl-0">
        <div class="row position-relative mb-0">

            <!-- Botón guardar cambios -->
            <button class="btn btn-success btn-panther"><i class="fas fa-save"></i> Guardar</button>

                <div class="col-12 pl-0">                
                    <?php
                    $bg_gradient = "
                    background: rgb(42,34,195);
                    background: -moz-linear-gradient(0deg, rgba(42,34,195,1) 0%, rgba(136,45,253,1) 100%);
                    background: -webkit-linear-gradient(0deg, rgba(42,34,195,1) 0%, rgba(136,45,253,1) 100%);
                    background: linear-gradient(0deg, rgba(42,34,195,1) 0%, rgba(136,45,253,1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2a22c3',endColorstr='#882dfd',GradientType=1);
                    ";
                    ?>

                    <div class="panther-header pt-4" style="<?php echo $bg_gradient; ?>">
                        <div class="panther-port">
                            <img src="<?php echo PANTHER_DIR_URI; ?>admin/img/panther.svg" alt="">
                        </div>
                        <div class="panther-header-title">
                            <h4><i class="fas fa-cog"></i> <span>Opciones</span></h4>
                        </div>                    
                    </div>
                </div>
            </div>

            <!-- Columna de navegación opciones tema -->
            <div class="row ml-1">
                <div class="col-3">
                    <ul class="panther-menu">
                        <li>
                            <a href="#panther-global" class="active" data-menuActivado="global">
                            <i class="fas fa-cog"></i><span> Opciones</span>
                            </a>
                        </li>
                        <li>
                            <a href="#panther-header" class="" data-menuActivado="header">
                            <i class="fas fa-cog"></i><span> Cabecera</span>
                            </a>
                        </li>
                        <li>
                            <a href="#panther-menu" class="" data-menuActivado="header">
                            <i class="fas fa-cog"></i><span> Cabecera</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contenido de la configuracion -->
                <div class="col-9">
                    <form id="panther-form">
                        <div id="panther-form-content">
                            <input type="hidden" name="panther[menuActivado]" id="panther-menu-activado">

                            <!-- Configuraciones globales -->
                            <?php require_once PANTHER_DIR_PATH . 'admin/partials/forms-sections/panther-global.php'; ?>
                            <?php require_once PANTHER_DIR_PATH . 'admin/partials/forms-sections/panther-header.php'; ?>
                            <?php require_once PANTHER_DIR_PATH . 'admin/partials/forms-sections/panther-menu.php'; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>