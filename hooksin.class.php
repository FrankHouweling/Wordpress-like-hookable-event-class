<?php
require_once "hookcontroller.class.php";

class hooksIn
{
    function __construct(){
        /*
        *  Addhook does not have to be called in a constructor, in fact it can be called anywhere.
        */
        hookController::getInstance()->addHook("hasAHook", "hookedEvent", $this, "thisIsHookedIn");
    }
    
    function thisIsHookedIn(){
        echo "I am hooked in :)";
        
        return true; // Run the original method
        // To not run the original method (completely override the original behavior) return false
    }
}

?>
