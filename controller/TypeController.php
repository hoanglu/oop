<?php
include('Controller.php');
class TypeController extends Controller{

    public function getTypeNews(){
        return $this->loadView('type');
    }
}
?>