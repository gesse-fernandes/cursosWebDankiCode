<?php
namespace dankiCode;
    class Application{
        private $controller;

        public function setApp()
        {
            $loadName = 'dankiCode\Controllers\\';
            $url = explode('/',@$_GET['url']);
            if($url[0] == '')
            {
                $loadName .='Home';
            }
            else
            {
                $loadName.=ucfirst(strtolower($url[0]));
            }
            $loadName.='Controller';
            if(file_exists($loadName . '.php')){
            $this->controller = new $loadName();
            }
            else{
                /*
                die('Não existe a pagina solicitada!');
                */
                include('Views/pages/404.php');
                die();
            }
        }
        public function run()
        {
            $this->setApp();
            $this->controller->index();
           // echo "</br>Rodando";
        }
    }
?>