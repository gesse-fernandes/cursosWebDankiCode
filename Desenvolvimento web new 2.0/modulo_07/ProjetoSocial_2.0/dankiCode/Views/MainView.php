<?php
 namespace dankiCode\views;

 class MainView
 {
     public  static function render($filename)
     {
          include('pages/' . $filename . '.php');
          
     }
 }

?>