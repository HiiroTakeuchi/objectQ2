<?php
 require_once("car.php");

 class Ferrari extends Car {
  var $height = 90;
   

   function __construct(){
     $this->name = "FERRARI";
     $this->acceleration = 10;
     


 }
     
    function ReturnHeight(){
       return $this->height;
     }
  

  function LiftUp(){
    if($this->height == 90){
      $this->height = $this->height +40;
      $this->acceleration = $this->acceleration * 0.8;
      echo "車高を".$this->height."に上げたFERRARIの加速度は".$this->acceleration."m/s²となる。<br>";
      }else{echo "これ以上リフトアップできません。" ;
    }
  }

  function LiftDown(){ if($this->height != 90 ){
    $this->height = $this->height - 40;
    $this->acceleration = 10;
    echo "車高を".$this->height."に下げたFERRARIの加速度は".$this->acceleration."m/s²となる。<br>";
  }else{
    echo "これ以上リフトダウンできません。";
  }
}

}
 
?>