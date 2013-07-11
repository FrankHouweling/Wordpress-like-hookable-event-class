<?php

require_once "hook.class.php";

abstract class hookable
{
    function hook(){
        $deb = debug_backtrace();
        $object = $deb[0]['object'];
        return new Hook( $object );
    }
}

?>
