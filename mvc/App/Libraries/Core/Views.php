<?php
class Views
{
    public function getView($controller, $view, $data = "")
    {
        $controller = get_class($controller);
        $view = "App/Views/" . $controller . "/" . $view . ".php";
        if (file_exists($view)) {
            require_once $view;
        } else {
            require_once "App/Views/Errors/error.php";
        }
    }
}