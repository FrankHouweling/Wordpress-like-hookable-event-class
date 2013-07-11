Wordpress-like-hookable-event-class
===================================

by Frank Houweling :)

Adding a hook to original code:

$this->hook()->hookedFunction();

Adding an event to hook in on this hook:
$controller = hookController::getInstance();
$controller->addHook("classname-with-hook", "hookedFunction", $this, "toBeCalledFunction");

Make the toBeCalledFunction return true to also fire the original function, or false if you want to completely overwrite it.

That's all!
