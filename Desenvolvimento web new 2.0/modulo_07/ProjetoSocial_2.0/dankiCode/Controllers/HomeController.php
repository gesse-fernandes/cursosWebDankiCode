<?php
namespace dankiCode\controllers;
  class HomeController
  {
    public function index()
    {
        if(isset($_SESSION['login']))
        {
        //Renderisa a home do usuario  
          \dankiCode\views\MainView::render("home");
        }
        else 
        {
          //Redenrisa pra criar uma conta.
           \dankiCode\views\MainView::render("registrar");
        }
    }
  }

?>