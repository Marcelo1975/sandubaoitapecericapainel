<?php
namespace Controllers;
//CONTROLADOR DE PAGINA NAO ENCONTRADA
use \Core\Controller;

class NotfoundController extends Controller {

    public function index() {
        $this->loadView('404', array());
    }

}