<?php

require_once "hookable.class.php";

class hasAHook extends hookable
{
    function hookedEvent(){
        echo "Yeah!";
    }
    
    function caller(){
        $this->hook()->hookedEvent();
    }
}

?>
