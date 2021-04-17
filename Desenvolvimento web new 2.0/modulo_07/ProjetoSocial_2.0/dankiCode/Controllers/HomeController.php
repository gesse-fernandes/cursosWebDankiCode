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
          if(isset($_POST['acao']))
          {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $verifica = \dankiCode\Mysql::connect()->prepare("SELECT * FROM usuarios where email = ?");
            $verifica->execute(array($email));
            if($verifica->rowCount() == 0)
            {
              //nao existe usuario
              \dankiCode\Utilidades::alerta("Não existe nenhum usuario com este email");
              \dankiCode\Utilidades::alerta(INCLUDE_PATH);
            }
            else{
              $dados = $verifica->fetch();
              $senhaBanco =  $dados['senha'];
              if(\dankiCode\Bcrypt::check($senha,$senhaBanco)){
                //user logado com sucesso
                $_SESSION['login'] = $dados['email'];
            \dankiCode\Utilidades::alerta("Logado com sucesso");
            \dankiCode\Utilidades::alerta(INCLUDE_PATH);
              }
              else{
            \dankiCode\Utilidades::alerta("senha incorreta");
            \dankiCode\Utilidades::alerta(INCLUDE_PATH);
              }
            }
          }
          //Redenrisa pra criar uma conta.
           \dankiCode\views\MainView::render("login");
        }
    }
  }

?>