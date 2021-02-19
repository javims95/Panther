<?php

class PNT_Form_Builder {

    private $idConf;

    private $sections;
    private $idSect;
    private $titleSect;

    private $elems;

    private $idElem;
    private $idsElem;
    private $typeElem;
    private $titleElem;
    private $valueElem;

    private $optionsRadio;
    
    private $start;
    private $min;
    private $max;

    public function addSection($idConf, $idSect, $titleSect, $elems) {
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

        $this->idConf        = strtolower($idConf);
        $this->idSect        = strtolower($idSect);
        $this->titleSect     = $titleSect;
        $this->elems         = $elems;

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

    public function addFull ($idConf, $menuActivated, $sections) {
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

        $this->idConf       = strtolower($idConf);
        $this->sections     = $sections;

        $dBlock = $menuActivated == $this->idConf ? 'display:block' : '';

        $output = "<div id='pnt-{$this->idConf}' class='pnt-content col-12' style='$dBlock'>";

        foreach($this->sections as $idSect => $sect) {

            $output .= $this->addSection($this->idConf, $idSect, $sect['titleSection'], $sect['elems']);
        }

        $output .= "</div>";

        return $output;
    }

    private function processor() {
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

        foreach( $this->elems as $idElem => $elem ){

            $this->idElem        = $idElem;
            $this->typeElem      = $elem['type'];
            $this->titleElem     = $elem['title'];
            $this->valueElem     = $elem['value'];
            $this->idsElem     = isset($elem['ids']) ? $elem['ids'] : '' ;

            $output .= "
            <div class='row mb-3'>
                <div class='col-md-4'>
                    <h6><strong>{$this->titleElem}:</strong></h6>
                </div>";

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

                case 'radio':
                    $this->optionsRadio = $elem['optionsRadio'];
                    $output .= $this->radio();
                    break;

                case 'checkbox':
                    $this->optionsRadio = $elem['optionsRadio'];
                    $output .= $this->checkbox();
                    break;

                case 'switch':
                    $output .= $this->switch();
                    break;

                case 'rangeSlider':
                    $this->start    = $elem['start'];
                    $this->min      = $elem['min'];
                    $this->max      = $elem['max'];
                    $output .= $this->rangeSlider();
                    break;
            }

            $output .= "</div>";

        }

        return $output;

    }

    private function text() {
        /**
         * Crea el div y dentro un input de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo texto
         */

        $output = "
        <div class='col-md-8'>
            <input class='form-control' type='text' value='{$this->valueElem}' name='{$this->attr_name_val()}'>
        </div>
        ";

        return $output;
    }
    
    private function textarea() {
        /**
         * Crea el div y dentro un textarea de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo textarea
         */
            
        $output = "
            <div class='col-md-8'>
                <textarea name='{$this->attr_name_val()}' class='form-control'>{$this->valueElem}</textarea>
            </div>
        ";
    
        return $output;

    }

    private function radio () {
        /**
         * Crea el div y dentro un conjunto de radio buttons de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo radio
         */
            
        $output = "
            <div class='col-md-8'>";

            foreach ($this->optionsRadio as $idOptRadio => $titleOptRadio) {
                
                $output .= "
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='{$this->attr_name_val()}' id='$idOptRadio' value='$idOptRadio' ".checked($this->valueElem, $idOptRadio, false)." >
                        <label class='form-check-label' for='$idOptRadio'>
                            $titleOptRadio
                        </label>
                    </div>
                ";
            }
            
            $output .= "</div>";
    
        return $output;
    }
    private function checkbox () {
        /**
         * Crea el div y dentro un conjunto de radio buttons de forma dinámica
         *
         * @access private
         * @return $output cadena de texto HTML, tipo radio
         */
            
        $output = "
            <div class='col-md-8'>";

            foreach ($this->optionsRadio as $idOptRadio => $titleOptRadio) {
                
                $output .= "
                    <div class='form-check'>
                        <input class='form-check-input' type='checkbox' name='{$this->attr_name_val()}[$idOptRadio]' id='$idOptRadio' value='$idOptRadio' ".checked($this->valueElem, $idOptRadio, false)." >
                        <label class='form-check-label' for='$idOptRadio'>
                            $titleOptRadio
                        </label>
                    </div>
                ";
            }
            
            $output .= "</div>";
    
        return $output;
    }

    private function media() {
        /**
         * Crea el bloque de código HTML de forma dinámica
         * 
         * Mediante una condicion se añaden estilos para mostrar
         * la miniatura del archivo.
         *
         * @access private
         * @return $output cadena de texto HTML, tipo media
         */

        if ($this->valueElem != ''){
            
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
                    <input type='text' id='pnt-{$this->idElem}' name='{$this->attr_name_val()}' value='{$this->valueElem}'>
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

    private function switch() {
        /**
         * Crea el bloque de código HTML de forma dinámica
         * 
         * Mediante una condicion se añaden estilos para mostrar
         * un botón de tipo switch
         *
         * @access private
         * @return $output cadena de texto HTML, tipo switch
         */

        $output = "
            <div class='col-md-8'>
                <div class='custom-control custom-switch'>
                    <label class='px-5' for='switch'>OFF</label>
                    <input ".checked( $this->valueElem, 'on' )." name='{$this->attr_name_val()}' type='checkbox' class='custom-control-input' id='switch'>
                    <label class='custom-control-label' for='switch'>ON</label>
                </div>
            </div>
        ";        

        return $output;
    }

    public function rangeSlider() {
        /**
         * Crea el bloque de código HTML de forma dinámica
         * 
         * Crea un range slider, con un min y un max
         *
         * @access private
         * @return $output cadena de texto HTML, tipo range slider
         */

        $output = "
        <div class='col-md-8'>
            <div class='pnt-rangeSlider'></div>
            <p>{$this->min} - {$this->max}</p>
            <input name='{$this->attr_name_val()}' type='text' id='' value=''>
        </div>
        ";

        return $output;
    }

    private function attr_name_val (){

        $name = "pnt[{$this->idConf}][{$this->idElem}]";

        if ($this->idsElem != '' ){

            $idsElem = explode(',', $this->idsElem);
            $idName = "";

            foreach ($idsElem as $id) {

                $idName .= "[$id]";
            }

            $name .= $idName;
        }

        return $name;
    }

}
