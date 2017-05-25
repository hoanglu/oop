<?php
include('Controller.php');

class DetailsController extends Controller{

    public function getDetails(){
        return $this->loadView('details');
    }
}
?>