<?php

require_once "hasahook.class.php";
require_once "hooksin.class.php";

$hooksin = new hooksIn();

$testclass = new hasAHook();
$testclass->caller();

?>
