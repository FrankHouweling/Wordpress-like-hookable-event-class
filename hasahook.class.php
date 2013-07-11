<?php

require_once "hookable.class.php";

class hasAHook extends hookable
{
    
    function __construct()
    {
        
    }
    
    function hookedEvent()
    {
        echo "Yeah!";
    }
    
    function caller()
    {
        $this->hook()->hookedEvent();
    }
    
}

?>
