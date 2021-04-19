<?php

namespace dankiCode\Controllers;

class ComunidadeController{
    public function index()
    {
        if(isset($_SESSION['login']))
        {
            if(isset($_GET['solicitarAmizade'])){
                $idPara = (int) $_GET['solicitarAmizade'];
                if(\dankiCode\Models\UsuariosModels::solicitarAmizades($idPara)){
                    \dankiCode\Utilidades::alerta("Amizade solicitada com sucesso"); 
                }else{
                    \dankiCode\Utilidades::alerta("Ocorreu um erro ao solicitar amizade..."); 
                }
            }
                \dankiCode\views\MainView::render('comunidade');
        }
        else{
            \dankiCode\Utilidades::redirect(INCLUDE_PATH);
        }
    }
}