<?php
include('database.php');

class HomeModel extends database{

    public function getSlide(){
        $sql = 'select * from slide';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>