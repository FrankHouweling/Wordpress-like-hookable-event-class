<?php

class hookController
{
    static $instance;
    private $hooks;
    
    public static function getInstance(){
        if( self::$instance instanceof hookController ){
            return self::$instance;
        }
        else{
            $controller = new hookController();
            self::$instance = $controller;
            return $controller;
        }
    }
    
    public function getHooks( $classname, $functionname ){
        $return = array();
        if( count($this->hooks) !== 0 ){
            foreach( $this->hooks as $h ){
                if( $h['hookedClassName'] == $classname && $h['hookedFunctionName'] == $functionname )
                    $return[] = $h;
            }
        }
        return $return;
    }
    
    public function addHook( $hookedClassName, $hookedFunctionName, 
            $calledObject, $calledFunctionName ){
        $this->hooks[]  =   array( "hookedClassName" =>  $hookedClassName, 
                                               "hookedFunctionName" => $hookedFunctionName, 
                                               "calledObject" => $calledObject, 
                                               "calledFunctionName" => $calledFunctionName );
    }
}

?>
