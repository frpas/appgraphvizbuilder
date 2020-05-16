<?php

/*
 * Description de la classe.
 *
 * (c) Franck Passelegue
 *
 */

namespace frpas\AppGraphvizBuilder;

use frpas\AppGraphvizBuilder\Link;

/**
 * Class : 
 *
 *
 * @author Franck Passelegue <f.passelegue@laposte.net>
 */
class LinksArray
{    
    /* -------------- Attributs -------------------*/    
    private $listLinks = array();


    /**  
     * @param string $name The template logical name
     * @return void
     */
    public function __construct( ) 
    {        
          
    }

    /**
     * @param Link $l The link object of 2 components
     */
    public function addLink(Link $l)
    {
        $this->listLinks[] = $l;
        
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