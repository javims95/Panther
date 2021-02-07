<?php 

class PNT_Form_Builder {

    private $idConfig;
    
    private $section;
    private $idSection;
    private $titleSection;
    
    private $elements;

    private $idElement;
    private $typeElement;
    private $titleElement;
    private $valueElement;

    public function addSection ($idConfig, $idSection, $titleSection, $elements){
        
        $this->idConfig     = strtolower($idConfig);
        $this->idSection    = strtolower($idSection);
        $this->titleSection = $titleSection;
        $this->elements     = $elements;

        $output = "
        <section id='pnt-{$this->idConfig}-{$this->idSection}' class='my-3'>
            <div class='pnt-sec-title btn btn-block text-white mb-3 bg-primary'>
                <h5>
                    <span><strong>{$this->titleSection}</strong></span>
                </h5>
            </div>

        <div class='pnt-sec-configs'>
        ";

        $output .= $this->processor();

        $output .= "
        </div>
        </section>
        ";

    }

    private function processor (){

        $output = "";

        foreach($this->elems as $idElement => $elem){

            $this->idElement = $idElement;
            $this->typeElement = $elem['type'];
            $this->titleElement = $elem['title'];
            $this->valueElement = $elem['value'];

            $output .= "
            <div class='row mb-3'>
                <div class='col-md-4'>
                    <h6><strong>Texto</strong></h6>
                </div>
                <div class='col-md-8'>
                    <input class='form-control' type='text' value='' id=''>
                </div>
            </div>
            ";

        }

    }

}