<?php

class PNT_Form_Builder
{

    private $idConf;

    private $sections;
    private $idSect;
    private $titleSect;

    private $elems;

    private $idElem;
    private $idsElem;
    private $idsInvested;
    private $typeElem;
    private $titleElem;
    private $valueElem;

    private $options;

    private $start;
    private $min;
    private $max;

    private $tag;
    private $preview;

    private $alertTitle;
    private $alertContent;
    private $alertFooter;

    public function addSection($idConf, $idSect, $titleSect, $elems)
    {
        /**
         * Añade una sección única de forma dinámica
         *
         * Este método recibe cuatro parámetros, se crea una sección
         * con sus identificadores y valores recibidos por parámetro.
         *
         * @access public
         * @param string $idSect nombre de la seccion principal
         * @param string $idConf nombre de la seccion secundaria
         * @param string $titleSect titulo de la seccion
         * @param string $elems es un array de elementos que contiene cada sección
         * @return $output cadena de texto HTML, para crear la seccion
         */

        $this->idConf = strtolower($idConf);
        $this->idSect = strtolower($idSect);
        $this->titleSect = $titleSect;
        $this->elems = $elems;

        $output = "
        <section id='pnt-{$this->idConf}-{$this->idSect}' class='my-3'>
        <div class='pnt-sec-title btn btn-block text-white mb-3 bg-primary'>
            <h5>
                <span><strong>{$this->titleSect}</strong></span>
            </h5>
        </div>

        <div class='pnt-sec-configs'>
        ";

        $output .= $this->processor();

        $output .= "
        </div>
        </section>
        ";

        return $output;
    }

    public function addFull($idConf, $menuActivated, $sections)
    {
        /**
         * Método que llama a addSection. Con esta única
         *  función se crea la sección completa
         *
         * Este método recibe dos parámetros, llama a todos
         * los métodos necesarios para crear la sección.
         *
         * @access public
         * @param string $idConf nombre de la seccion secundaria
         * @param string $sections es un array asociativo de arrays que contine todas las secciones
         * @return $output cadena de texto HTML, para crear la seccion
         */

        $this->idConf = strtolower($idConf);
        $this->sections = $sections;

        $dBlock = $menuActivated == $this->idConf ? 'display:block' : '';

        $output = "<div id='pnt-{$this->idConf}' class='pnt-content col-md-12 px-0' style='$dBlock'>";

        foreach ($this->sections as $idSect => $sect) {

            $output .= $this->addSection($this->idConf, $idSect, $sect['titleSection'], $sect['elems']);
        }

        $output .= "</div>";

        return $output;
    }

    private function processor()
    {
        /**
         * Procesa los datos del array de elementos, para crear subsecciones
         * con las distintas opciones de configuración
         *
         * Mediante un foreach se procesa los datos del array de elementos.
         * Con un switch se elige el tipo de elemento seleccionado.
         *
         * @access private
         * @return $output cadena de texto HTML, según el tipo de elemento seleccionado.
         */

        $output = "";

        foreach ($this->elems as $idElem => $elem) {

            $this->idElem           = $idElem;
            $this->typeElem         = $elem['type'];
            $this->titleElem        = $elem['title'];
            $this->valueElem        = $elem['value'];
            $this->options          = isset($elem['options']) ? $elem['options'] : '';

            // colorPicker
            $this->idsElem          = isset($elem['ids']) ? $elem['ids'] : '';
            $this->idsInvested      = isset($elem['idsInvested']) ? $elem['idsInvested'] : '';
            $this->customClass      = isset($elem['customClass']) ? $elem['customClass'] : '';
            $this->tag              = isset($elem['tag']) ? $elem['tag'] : '';
            $this->preview          = isset($elem['preview']) ? $elem['preview'] : '';

            // alertInfo
            $this->alertTitle       = isset($elem['alertTitle']) ? $elem['alertTitle'] : '';
            $this->alertContent     = isset($elem['alertContent']) ? $elem['alertContent'] : '';
            $this->alertFooter      = isset($elem['alertFooter']) ? $elem['alertFooter'] : '';
            $this->alertClassColor  = isset($elem['alertClassColor']) ? $elem['alertClassColor'] : '';


            $output .= "
            <div class='row mb-3'>
                <div class='col-md-4'>
                    <h6><strong>{$this->titleElem}:</strong></h6>
                </div>
            ";

            switch ($this->typeElem) {

                case 'text':
                    $output .= $this->text();
                    break;

                case 'textarea':
                    $output .= $this->textarea();
                    break;

                case 'media':
                    $output .= $this->media();
                    break;

                case 'select':
                    $output .= $this->select();
                    break;

                case 'radio':
                    $output .= $this->radio();
                    break;

                case 'checkbox':
                    $output .= $this->checkbox();
                    break;

                case 'switch':
                    $output .= $this->switch();
                    break;

                case 'noUiSlider':
                    $this->start = $elem['start'];
                    $this->min = $elem['min'];
                    $this->max = $elem['max'];
                    $output .= $this->noUiSlider();
                    break;

                case 'listSidebar':
                    $output .= $this->listSidebar();
                    break;

                case 'colorpicker':
                    $output .= $this->colorpicker();
                    break;

                case 'alertDismissible':
                    $output = $this->alert_dismissible();
                    break;

                case 'multi':
                    $output .= $this->multi();
                    break;
            }

            $output .= "</div>";
        }

        return $output;
    }

    private function text()
    {
        /**
         * Crea el div y dentro un input de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo texto
         */

        $output = "
        <div class='col-md-8'>
            <input class='form-control' type='text' value='{$this->valueElem}' name='{$this->attr_name_val()}' spellcheck='false'>
        </div>
        ";

        return $output;
    }

    private function textarea()
    {
        /**
         * Crea el div y dentro un textarea de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo textarea
         */

        $output = "
            <div class='col-md-8'>
                <textarea name='{$this->attr_name_val()}' class='form-control' spellcheck='false'>{$this->valueElem}</textarea>
            </div>
        ";

        return $output;
    }

    private function radio()
    {
        /**
         * Crea el div y dentro un conjunto de radio buttons de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo radio
         */

        $output = "
            <div class='col-md-8'>";

        foreach ($this->options as $valOpt => $titleOpt) {

            $output .= "
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='{$this->attr_name_val()}' id='$valOpt' value='$valOpt' " . checked($this->valueElem, $valOpt, false) . " >
                    <label class='form-check-label' for='$valOpt'>
                        $titleOpt
                    </label>
                </div>
            ";
        }

        $output .= "</div>";

        return $output;
    }

    private function select()
    {
        /**
         * Crea el div y dentro un conjunto de selects de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo selec
         */

        $output     = "";
        $optsSelect = "";

        if (isset($this->options['optgroup'])) {

            $optgroup = $this->options['optgroup'];

            if($this->options['type'] == 'font') $this->valueElem = str_replace('+', ' ', $this->valueElem);

            foreach ($optgroup as $fontType => $opts) {

                $optsSelect .= "<optgroup label='{$opts['title']}'>";

                foreach ($opts['opts'] as $valOpt => $titleOpt) {

                    if ($fontType == 'googlefonts') {

                        $family     = $valOpt;
                        $variants   = $titleOpt['variants'];
                        $familyVal  = str_replace(' ', '+', $family);

                        $optsSelect .= "<option value='$familyVal' data-fontType='$fontType' data-variants='$variants' "
                            . selected($this->valueElem, $valOpt, false) . ">$family</option>";

                        continue 1;
                    }

                    $optsSelect .= "<option value='$valOpt' data-fontType='$fontType' " . selected($this->valueElem, $valOpt, false) . ">$titleOpt</option>";
                }
            }
        } else {

            foreach ($this->options as $valOpt => $titleOpt) {

                $optsSelect .= "<option value='$valOpt' " . selected($this->valueElem, $valOpt, false) . ">$titleOpt</option>";
            }
        }

        $extra      = "";
        $dataAttr   = "";

        switch ($this->options['type']) {

            case 'font':

                $extra = "
                <input id='pnt-{$this->idConf}-{$this->idElem}-fontType' type='hidden' name='pnt[{$this->idConf}][{$this->idElem}][fontType]' value='{$this->options['fontType']}' >

                <div class='pnt-options-variants-{$this->idElem}'>
                    <p class='pnt-checkbox-inline mt-4'>
                        {$this->selected_variants_font()}
                    </p>
                </div>
                ";
                $dataAttr = "data-fontselect='{$this->idElem}'";
                break;
        }

        $output = "
            <div class='col-md-8'>
                <select name='{$this->attr_name_val()}' $dataAttr class='selectpicker form-control {$this->attr_class_val()}' data-live-search='true'>
                    $optsSelect
                </select>
            
                $extra
            </div>
        ";

        return $output;
    }

    private function checkbox()
    {
        /**
         * Crea el div y dentro un conjunto de radio buttons de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo radio
         */

        $output = "
            <div class='col-md-8'>";

        foreach ($this->options as $valOpt => $titleOpt) {

            $output .= "
                    <div class='form-check'>
                        <input class='form-check-input' type='checkbox' name='{$this->attr_name_val()}[$valOpt]' id='$valOpt' value='$valOpt' " . checked($this->valueElem, $valOpt, false) . " >
                        <label class='form-check-label' for='$valOpt'>
                            $titleOpt
                        </label>
                    </div>
                ";
        }

        $output .= "</div>";

        return $output;
    }

    private function media()
    {
        /**
         * Crea el bloque de código HTML de forma dinámica
         *
         * Mediante una condicion se añaden estilos para mostrar
         * la miniatura del archivo.
         *
         * @access private
         * @return $output cadena de texto HTML, tipo media
         */

        if ($this->valueElem != '') {

            $dBlock = "display:block;";
            $dFlex = "display:flex;";
        } else {

            $dBlock = "";
            $dFlex = "";
        }

        $output = "
                <div class='col-md-8 pnt-input-media d-flex'>
                    <button class='btn btn-secondary' type='button' data-media='pnt-{$this->idElem}'>
                    <i class='fas fa-image'> Subir archivo</i>
                    </button>
                    <input class='form-control' type='text' id='pnt-{$this->idElem}' name='{$this->attr_name_val()}' value='{$this->valueElem}'>
                    <span class='pnt-media-remove' data-media-remove='pnt-{$this->idElem}' style='$dFlex'>
                    <i class='fas fa-times'></i>
                    </span>
                </div>

            </div>
            <div class='row mb-3'>
                <div class='col-md-4'></div>
                <div class='col-md-8 pnt-media-preview pnt-{$this->idElem}'>
                    <img class='img-thumbnail' style='width: 200px' src='{$this->valueElem}' style='$dBlock'>
                </div>

        ";

        return $output;
    }

    function switch()
    {
        /**
         * Crea el bloque de código HTML de forma dinámica
         *
         * Mediante una condicion se añaden estilos para mostrar
         * un botón de tipo switch
         *
         * @access private
         * @return $output cadena de texto HTML, tipo switch
         */

        $on     = 'On';
        $off    = 'Off';

         if ($this->options != '' && is_array($this->options)){

            $on     = $this->options['on'];
            $off    = $this->options['off'];
         }

        $output = "
            <div class='col-md-8'>
                <div class='switch'>
                    <label>
                    $off
                    <input " . checked($this->valueElem, 'on', false) . " type='checkbox' name='{$this->attr_name_val()}'>
                    <span class='lever'></span>
                    $on
                    </label>
                </div>
            </div>
        ";

        return $output;
    }

    public function noUiSlider()
    {
        /**
         * Crea el bloque de código HTML de forma dinámica
         *
         * Crea un range slider, con un min y un max
         *
         * @access public
         * @return $output cadena de texto HTML, tipo range slider
         */

        $output = "
        <div class='col-md-8'>
            <div class='form-row'>
                <div class='form-group col-md-9 align-self-center'>
                    <input style='width:100%' type='range' class='form-range' id='rangeSlider' value='{$this->start}' min='{$this->min}' max='{$this->max}'>
                </div>
                <div class='form-group col-md-3'>
                    <input type='number' name='{$this->attr_name_val()}' class='form-control'
                    id='output' value='{$this->start}' min='{$this->min}' max='{$this->max}'>
                </div>
            </div>
        </div>
        ";

        return $output;
    }

    private function listSidebar()
    {
        /**
         * Crea el bloque de código HTML de forma dinámica
         *
         * Crea una lista de los sidebars
         *
         * @access public
         * @return $output cadena de texto HTML, tipo listSidebar
         */

        if ($this->valueElem != '' && is_array($this->valueElem)) {

            $output_list_custom = "";

            foreach ($this->valueElem as $key => $list) {

                $id = ++$key;
                $lowerName = strtolower($list);
                $ucFirstName = ucfirst($lowerName);

                $output_list_custom .= "
                    <li>
                        <input id ='{$this->attr_id_val()}-$id' type='hidden' name='{$this->attr_name_val()}[]'>
                        <span class='texto'>$ucFirstName</span>
                        <span class='pnt-remove-listSidebar' data-id='{$this->attr_id_val()}'>
                            <i class='fas fa-times'></i>
                        </span>
                    </li>
                ";
            }
        } else {

            $output_list_custom = '';
        }

        $output = "
        <div class='col-md-8 pnt-listSidebar d-flex'>
            <input type='text' id='{$this->attr_id_val()}' name='' value=''>
            <button class='btn btn-secondary' type='button' data-id='{$this->attr_id_val()}'>
            <i class='fas fa-plus'> Agregar</i>
            </button>
        </div>

        <div class='col-sm-12 col-md-6 offset-md-4'>
            <ul class='pnt-listSidebar-items {$this->attr_class_val()}'>
                $output_list_custom
            </ul>
        </div>
        ";

        return $output;
    }

    private function colorpicker()
    {

        if ($this->preview != '') {

            $tag = "data-tag='{$this->tag}'";
            $preview = "<div class='col-sm-12 col-md-6 offset-md-4'>";

            if ($this->preview == 'text') {

                $preview .= "
                <{$this->tag} class='pnt-preview-color-{$this->tag} my-3' style='color:{$this->valueElem};'>
                    " . get_bloginfo('name') . "
                </{$this->tag}>
                ";
            } elseif ($this->preview == 'bg') {
            }

            $preview .= "</div>";
        } else {

            $tag = "";
            $preview = "";
        }

        $output = "
        <div class='pnt-input col-md-8'>
            <div id='{$this->attr_class_val()}' class='file-field' $tag>
                <div class='btn btnSelectColor shadow-sm' style='background-color:{$this->valueElem};'></div>
                <div class='file-path-wrapper'>
                    <input class='form-control' style='width: auto' type='text' name='{$this->attr_name_val()}' />
                </div>
            </div>
        </div>
        $preview
        ";

        return $output;
    }

    private function alert_dismissible()
    {

        /**
         * Crea el div y dentro un alert de información de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo alert
         */

        $output = "        
        <div class='alert alert-{$this->alertClassColor}' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <h4 class='alert-heading'>{$this->alertTitle}</h4>
            <p>{$this->alertContent}</p>            
        ";

        if ($this->alertFooter != '') {

            $output .= "
            <hr>
            <p class='mb-0'>{$this->alertFooter}</p>
            ";
        }

        return $output;
    }

    private function multi()
    {

        $output = "
        <div class='col-md-8'>
            <div class='form-row'>
        ";

        foreach ($this->options as $idOpt => $opt) {

            $output .= "<div class='col mb-3 col-sm-12 col-md-6 col-xl-3'>";
            $type = $opt['type'];
            $title = $opt['title'];
            $id = "pnt-input-{$this->idConf}-{$this->idElem}-$type-$idOpt";

            switch ($type) {

                case 'number':
                    $output .= "
                    <div class='pnt-input-$type'>
                        <label for='$id'>$title</label><br>
                        <input name='{$this->attr_name_val()}[$idOpt]' id='$id' type='number' value='{$this->valueElem[ $this->idElem ][ $idOpt ]}'>
                        <span class='pnt-measure'>px</span>
                    </div>
                    ";
                    break;

                case 'select':
                    $output .= "
                    <div class='pnt-input-$type'>
                        <label for='$id'>$title</label>
                        <select name='{$this->attr_name_val()}[$idOpt]' id='$id' class='form-control' style='width: 12rem;'>
                            {$this->selected_weight_style($this->valueElem[$this->idElem][$idOpt])}
                        </select>
                    </div>
                    ";
                    break;
            }

            $output .= "</div>";
        }

        $output .= "
            </div>
        </div>
        ";

        return $output;
    }

    private function attr_name_val()
    {

        $name = "pnt[{$this->idConf}][{$this->idElem}]";

        if ($this->idsElem != '') {

            $idsElem = explode(',', $this->idsElem);
            $idName = "";

            if($this->idsInvested) $name = "pnt[{$this->idConf}]";

            foreach ($idsElem as $id) {

                $idName .= "[$id]";
            }

            $name .= $idName;

            if($this->idsInvested) $name .= "[{$this->idElem}]";
        }

        return $name;
    }

    private function attr_id_val()
    {
        $id = "pnt-{$this->idConf}-{$this->idElem}";
        return esc_attr($id);
    }

    private function attr_class_val()
    {
        $class = "pnt-{$this->idConf}-{$this->idElem}";

        if ($this->idsElem != '') {

            $idsElem = explode(',', $this->idsElem);
            $idName = "";

            foreach ($idsElem as $id) {

                $idName .= "-$id";
            }

            $class .= $idName;
        }

        if ($this->customClass != '') $class .= " {$this->customClass}";

        return esc_attr($class);
    }

    private function selected_variants_font()
    {

        $optVariants  = $this->options['variants'];
        $output       = "";


            if ($this->options['fontType'] == 'googlefonts') {

                $variantsFont       = explode(',', $optVariants['googlefonts'][$this->valueElem]['variants']);
                $variantsSelection  = is_array($optVariants['selection']) ? $optVariants['selection'] : explode(',', $optVariants['selection']);

                foreach ($variantsFont as $weight) {

                    $variantID      = "pnt-{$this->idConf}-{$this->idElem}-variants-$weight";
                    $variantsSelect = in_array($weight, $variantsSelection) ? $weight : '';

                    $output .= "
                        <label for='$variantID'>
                            <input type='checkbox' id='$variantID' name='pnt[{$this->idConf}][{$this->idElem}][variants][]' 
                                class='filled-in' value='$weight'" . checked($variantsSelect, $weight, false) . ">
                            <span>$weight</span>
                        </label>
                    ";
                }
            }

        return $output;
    }

    private function selected_weight_style($weightStyle)
    {

        $fonts = $this->valueElem;
        $output  = "";

        switch ($this->idElem) {

            case 'h1':
            case 'h2':
            case 'h3':
                $tipo   = $fonts['headerPrimary'];
                break;

            case 'h4':
            case 'h5':
            case 'h6':
                $tipo   = $fonts['headerSecondary'];
                break;

            default:
                $tipo   = $fonts[$this->idElem];
                break;
        }

        if( $tipo[ 'fontType' ] == 'googlefonts' ) {
            
            $variants = isset( $tipo[ 'variants' ] ) ? $tipo[ 'variants' ] : [];
            $variants = is_array( $variants ) ? $variants : explode( ',', $variants );
            
            if( ! empty( $variants ) ) {
                
                foreach( $variants as $weight ){
                    
                    $output .= "<option " . selected( $weightStyle, $weight, false ) . " 
                                    data-fontType='{$tipo[ 'fontType' ]}' 
                                    value='$weight'>$weight</option>
                    ";
                    
                }
                
            } else {

                $output .= "<option selected data-fontType='{$tipo[ 'fontType' ]}' value='400'>400</option>";

            }
            
        } elseif( $tipo[ 'fontType' ] == 'system' ) {
            
            for( $i=1; $i<9; $i++ ) {
                
                $output .= "
                <option " . selected( $weightStyle, "{$i}00,normal", false ) . " 
                    data-fontType='{$tipo[ 'fontType' ]}' 
                    value='{$i}00,normal'>{$i}00 Regular</option>
                <option " . selected( $weightStyle, "{$i}00,italic", false ) . " 
                    data-fontType='{$tipo[ 'fontType' ]}' 
                    value='{$i}00,italic'>{$i}00 Italic</option>
                ";
                
            }
            
        }

        return $output;
    }
    // private function selected_weight_style($weightStyle)
    // {

    //     $fonts = $this->valueElem;
    //     $output  = "";

    //     switch ($this->idElem) {

    //         case 'h1':
    //         case 'h2':
    //         case 'h3':
    //             $tipo   = $fonts['headerPrimary'];
    //             break;

    //         case 'h4':
    //         case 'h5':
    //         case 'h6':
    //             $tipo   = $fonts['headerSecondary'];
    //             break;

    //         default:
    //             $tipo   = $fonts[$this->idElem];
    //             break;
    //     }

    //     if( $tipo[ 'fontType' ] == 'goooglefonts' ) {
            
    //         $variants = isset( $tipo[ 'variants' ] ) ? $tipo[ 'variants' ] : [];
    //         $variants = is_array( $variants ) ? $variants : explode( ',', $variants );
            
    //         if( ! empty( $variants ) ) {
                
    //             foreach( $variants as $weight ){
                    
    //                 $output .= "<option " . selected( $weightStyle, $weight, false ) . " 
    //                                 data-fontType='{$tipo[ 'fontType' ]}' 
    //                                 value='$weight'>$weight</option>
    //                 ";
                    
    //             }
                
    //         } else {
                
    //             $output .= "<option selected data-fontType='{$tipo[ 'fontType' ]}' 
    //                                 value='400'>400</option>
    //                 ";
                
    //         }
            
    //     } elseif ($tipo['fontType'] == 'system') {
            
    //         for ($i = 1; $i < 9; $i++) {                

    //             $output .= "
    //             <option " . selected( $weightStyle, "{$i}00,normal", false ) . " 
    //                 data-fontType='{$tipo[ 'fontType' ]}' 
    //                 value='{$i}00,normal'>{$i}00 Regular</option>
    //             <option " . selected( $weightStyle, "{$i}00,italic", false ) . " 
    //                 data-fontType='{$tipo[ 'fontType' ]}' 
    //                 value='{$i}00,italic'>{$i}00 Italic</option>
    //             ";
    //         }
    //     }

    //     return $output;
    // }
}
