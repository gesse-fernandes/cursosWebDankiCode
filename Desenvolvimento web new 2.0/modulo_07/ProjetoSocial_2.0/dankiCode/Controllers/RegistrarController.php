<?php
namespace dankiCode\controllers;
  class RegistrarController
  {
    public function index()
    {
            if(isset($_POST['registrar']))  {
              $nome = $_POST['nome'];
              $email = $_POST['email'];
              $senha = $_POST['senha'];
              if(!filter_var($email,FILTER_VALIDATE_EMAIL))
              {
                  \dankiCode\Utilidades::alerta("Email invalido");
                  \dankiCode\Utilidades::redirect(INCLUDE_PATH . 'registrar');
              }else if(strlen($senha) < 6){
        \dankiCode\Utilidades::alerta("sua senha é muito curta");
        \dankiCode\Utilidades::redirect(INCLUDE_PATH . 'registrar');
              }
              else if(\dankiCode\Models\UsuariosModels::emailExists($email))
              {
        \dankiCode\Utilidades::alerta("Este email já existe");
        \dankiCode\Utilidades::redirect(INCLUDE_PATH . 'registrar');
              }
              
              else{
                //Registrar usuario.
                $senha = \dankiCode\Bcrypt::hash($senha);
                
               $registro= \dankiCode\Mysql::connect()->prepare("INSERT INTO usuarios values(null,?,?,?)");
               $registro->execute(array($nome,$email,$senha));
        \dankiCode\Utilidades::alerta("registrado com sucesso");
        \dankiCode\Utilidades::redirect(INCLUDE_PATH);
              }
            }
            
           \dankiCode\views\MainView::render("registrar");
        
    }
  }