<?php
namespace Controllers;
//CONTROLADOR DOS GASTOS
use \Core\Controller;
use \Models\Users;
use \Models\Finances;

class FinancesController extends Controller {
    
    private $user;
    
    public function __construct() {
        $this->user = new Users();
        
        if(!$this->user->isLogged()) {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $f = new Finances();
        $array = array(
            'user' => $this->user
        );

        $array['finances'] = $f->getAllFinances();

        $this->loadTemplate('finances', $array);
    }

    public function add_finances() {
        $f = new Finances();
        $data = array(
            'user' => $this->user
        );
        //ADICIONANDO GASTOS
        if(isset($_POST['energy']) && !empty($_POST['energy'])) {
            $energy = addslashes($_POST['energy']);
            $water = addslashes($_POST['water']);
            $gas = addslashes($_POST['gas']);
            $forRent = addslashes($_POST['for-rent']);
            $officials = addslashes($_POST['officials']);
            $providers = addslashes($_POST['providers']);
            $data_operation = '';

            $f->addFinances($energy, $water, $gas, $forRent, $officials, $providers, $data_operation);
        }
        $this->loadTemplate('add_finances', $data);
    }

    public function edit_finances($id) {
        $f = new Finances();
        $data = array(
            'user' => $this->user,
           'valuesFinances' => $f->getValuesFinances($id) 
        );
        //EDITANDO GASTOS
        if(isset($_POST['energy']) && !empty($_POST['energy'])) {
            $energy = addslashes($_POST['energy']);
            $water = addslashes($_POST['water']);
            $gas = addslashes($_POST['gas']);
            $forRent = addslashes($_POST['for-rent']);
            $officials = addslashes($_POST['officials']);
            $providers = addslashes($_POST['providers']);

            $f->editFinances($id, $energy, $water, $gas, $forRent, $officials, $providers);            
        }
        $this->loadTemplate('edit_finances', $data);
    }
    //APAGANDO GASTOS
    public function del($id) {
        $f = new Finances();
        $f->deleteFinances($id);

        header("Location: ".BASE_URL."finances");
        exit;
    }

}