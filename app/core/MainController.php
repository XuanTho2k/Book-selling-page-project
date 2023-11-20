<?php

class MainController 
{
    protected function view($view,$data=[])
    {
        if (file_exists("../app/views/bookstore/" . $view . ".php")) {
            include("../app/views/bookstore/" . $view . ".php");
        } else {
            include("../app/views/bookstore/404.php");
        }
    }
    protected function loadModel($model,...$args)
    {
        if(file_exists("../app/models/".$model.".php")){
            include_once ("../app/models/".$model.".php");
            return new $model(...$args);
        } else {
            return false;
        }
    }
}
