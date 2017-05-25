<?php
class Controller{

    public  function loadView($view, $data=array()){
        include("view/layout.php");
    }
}
?>