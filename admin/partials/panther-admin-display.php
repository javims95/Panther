<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <?php 
                $panther_img = PANTHER_DIR_URI . 'admin/img/jungla.jpg';
                $bg_gradient = "
                background: rgba(210,255,82,1), url($panther_img);
                background: -moz-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(81,121,51,1) 100%), url($panther_img);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(210,255,82,1)), color-stop(100%, rgba(81,121,51,1))), url($panther_img);
                background: -webkit-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(81,121,51,1) 100%), url($panther_img);
                background: -o-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(81,121,51,1) 100%), url($panther_img);
                background: -ms-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(81,121,51,1) 100%), url($panther_img);
                background: linear-gradient(to right, rgba(210,255,82,1) 0%, rgba(81,121,51,1) 100%), url($panther_img);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#517933', GradientType=1 );
                ";
                ?>

                <div class="panther-header" style="<?php echo $bg_gradient; ?>">
                    <div class="panther-port">
                        <img src="<?php echo PANTHER_DIR_URI; ?>admin/img/panther.svg" alt="">
                    </div>
                    <div class="panther-header-title">
                        <h4><i class="fas fa-cog"></i> <span>Opciones</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>