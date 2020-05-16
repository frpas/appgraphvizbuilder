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
class Item
{    
    /* -------------- Attributs -------------------*/
    private $name;
    private $listComponents = array();



    /**  
     * @param string $name The template logical name
     * @return void
     */
    public function __construct( $name = '') 
    {        
        $this->name = $name;       
    }


    /**
     * @param Component $c The component installed on this item
     * @return bool
     */
    public function addComponent(Component $c)
    {
        $this->listComponents[] = $c;
        
    }


    /**
     * @return bool
     */
    public function hasComponent($name)
    {
        return \array_key_exists($name, $this->$listComponents);
    }

    /**
     * @return Component
     */
    public function getComponent($name)
    {
        if (!\array_key_exists($name, $this->$listComponents)) {
            throw new \LogicException(sprintf('Node "%s" does not exist for Node "%s".', $name, \get_class($this)));
        }

        return $this->$listComponents[$name];
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