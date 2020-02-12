<?php 
require_once('menu.php');
class Drink extends Menu{
    private $type;

    public function __construct($name, $price,$type) {
        parent::__construct($name, $price);
        
        $this ->type = $type;
        
      }

    public function getType(){
      return $this -> type;
    }

    public function setType($type){
      $this -> type = $type;
    }
}

?>