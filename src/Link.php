<?php

/*
 * Description de la classe.
 *
 * (c) Franck Passelegue
 *
 */

namespace frpas\AppGraphvizBuilder;

use frpas\AppGraphvizBuilder\Component;

/**
 * Class : 
 *
 *
 * @author Franck Passelegue <f.passelegue@laposte.net>
 */
class Link
{    
    /* -------------- Attributs -------------------*/
    
    private $from;
    private $to;
    private $attributes;


    /**  
     * @param Component $c_from The component linked from
     * @param Component $c_to The component linked to
     * @param String $attr Attributes of the link
     * @return void
     */
    public function __construct( Component $c_from, Component $c_to, $attr = '') 
    {        
        $this->from = $c_from; 
        $this->to = $c_to; 
        $this->attributes = $attr;  
    }




    /**
     * Fonction generique appel echo sur l'objet.  
     * @return String  
     */
    public function __toString()
    {
        return  "Classe : " . get_class($this) . "\n";
    }

    
}

?>