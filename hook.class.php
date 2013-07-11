<?php

require_once "hookcontroller.class.php";

class hook
{
    private $object, $hookController;
    function __construct( $returnobject )
    {
        $this->object = $returnobject;
        $this->hookController = hookController::getInstance();
    }
    
    function __call( $name, $args )
    {
        $runOriginal = true;
        if( $hooks = $this->hookController->getHooks(  get_class($this->object),  $name  ) )
        {
            foreach( $hooks as $hook )
            {
                $funcname = $hook["calledFunctionName"];
                $object = $hook["calledObject"];
                $returnValue = $object->$funcname();
                if( $returnValue == false )
                    $runOriginal = false;
            }
        }
        if( $runOriginal )
            $this->object->$name($args);
    }
}

?>
