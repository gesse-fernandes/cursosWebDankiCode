<?php
	
	namespace dankiCode\Controllers;

	class HomeController{


		public function index(){

			if(isset($_GET['loggout'])){
				session_unset();
				session_destroy();

				\dankiCode\Utilidades::redirect(INCLUDE_PATH);
			}


			if(isset($_SESSION['login'])){
				//Renderiza a home do usuário.
				\dankiCode\Views\MainView::render('home');
			}else{
				//Renderizar para criar conta.

				if(isset($_POST['acao'])){
					$login = $_POST['email'];
					$senha = $_POST['senha'];

					

					//Verificar no banco de dados.

					$verifica = \dankiCode\MySql::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
					$verifica->execute(array($login));



					
					if($verifica->rowCount() == 0){
						//Não existe o usuário!
						\dankiCode\Utilidades::alerta('Não existe nenhum usuário com este e-mail...');
						\dankiCode\Utilidades::redirect(INCLUDE_PATH);
					}else{
						$dados = $verifica->fetch();
						$senhaBanco = $dados['senha'];
						if(\dankiCode\Bcrypt::check($senha,$senhaBanco)){
							//Usuário logado com sucesso
							$_SESSION['login'] = $dados['email'];
							$_SESSION['nome'] = explode(' ',$dados['nome'])[0];
							\dankiCode\Utilidades::alerta('Logado com sucesso!');
							\dankiCode\Utilidades::redirect(INCLUDE_PATH);
						}else{
							\DankiCode\Utilidades::alerta('Senha incorreta....');
							\dankiCode\Utilidades::redirect(INCLUDE_PATH);
						}
					}
					

				}

				\dankiCode\Views\MainView::render('login');
			}

		}

	}
