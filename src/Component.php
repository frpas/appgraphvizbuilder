<?php

/*
 * This file is part of AppGraphvizBuilder.
 *
 * (c) Franck Passelegue
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace frpas\AppGraphvizBuilder;

/**
 * Content the application component information and the link
 *
 * @final
 *
 * @author Franck Passelegue <f.passelegue@laposte.net>
 */
class Component
{    
    private $name;
    private $id;    
    

    /**
     * @param string $name The template logical name
     */
    public function __construct( $id, $name = '' )
    {        
        $this->id = $id;
        $this->name = $name;        
        
    }

    
    public function getName()
    {
        return $this->name;
    }




    /**
     * @return String  
     */
    public function __toString()
    {
        return  "Classe : " . get_class($this) . "\n";
    }

/*
    protected function getFirstComponentFromItem(Component $componentsList): Component
    {
    }

    //Obtenir le nom du serveur qui heberge le composant passé en paramètre
    public function getMachineFromComponent(int $componentId): Machine
    {
    }

*/
    
}

?>