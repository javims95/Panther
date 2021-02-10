<?php

class PNT_Form_Builder
{

    private $idConf;

    private $sections;
    private $idSect;
    private $titleSect;

    private $elems;

    private $idElem;
    private $typeElem;
    private $titleElem;
    private $valueElem;

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

        foreach( $this->elems as $idElem => $elem ){

            $this->idElem        = $idElem;
            $this->typeElem      = $elem['type'];
            $this->titleElem     = $elem['title'];
            $this->valueElem     = $elem['value'];

            $output .= "
            <div class='row mb-3'>
                <div class='col-md-4'>
                    <h6><strong>{$this->titleElem}</strong></h6>
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

        $name = "pnt[{$this->idConf}][{$this->idElem}]";

        $output = "
        <div class='col-md-8'>
            <input class='form-control' type='text' value='{$this->valueElem}' name='$name'>
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
        
        $name = "pnt[{$this->idConf}][{$this->idElem}]";
    
        $output = "
            <div class='col-md-8'>
                <textarea name='$name' class='form-control'>{$this->valueElem}</textarea>
            </div>
        ";
    
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

        if ($this->valueElem != ''){
            
            $dBlock = "display:block;";
            $dFlex = "display:flex;";

        } else {

            $dBlock = "";
            $dFlex = "";
        }

        $name = "pnt[{$this->idConf}][{$this->idElem}]";

        $output = "
            <div class='col-md-8 pnt-input-media d-flex'>
                <button class='btn btn-secondary' type='button' data-media='pnt-{$this->idElem}'>
                    <i class='fas fa-image'> Subir archivo</i>
                </button>
                <input type='text' id='pnt-{$this->idElem}' name='$name' value='{$this->valueElem}'>
                <span class='pnt-media-remove' data-media-remove='pnt-{$this->idElem}' style='$dFlex'>
                    <i class='fas fa-times'></i>
                </span>
            </div>

        </div>
        <div class='row mb-3'>
            <div class='col-md-4'></div>
            <div class='col-md-8 pnt-media-preview pnt-{$this->idElem}'>
                <img class='img-thumbnail' style='width: 200px' src='{$this->valueElem} style='$dBlock'>
            </div>
        </div>
        ";

        return $output;
    }

}
