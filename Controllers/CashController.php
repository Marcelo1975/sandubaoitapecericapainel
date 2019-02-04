<?php
namespace Controllers;
//CONTROLADOR DO CAIXA ELETRONICO
use \Core\Controller;
use \Models\Users;
use \Models\Acounts;

class CashController extends Controller {
    
    private $user;
    private $agency;
    private $acount;
    private $getbalance;
    
    public function __construct() {
        $this->user = new Users();
        $this->agency = new Acounts();
        $this->acount = new Acounts();
        $this->getbalance = new Acounts();
        //PEGANDO A CONTA, AGENCIA E O BALANCO FINAL
        if(!$this->user->isLogged()) {
            header("Location: ".BASE_URL."login");
            exit;
        }

        if(!$this->agency->getAgency()) {
            header("Location: ".BASE_URL."cash");
            exit;
        }

        if(!$this->acount->getAcount()) {
            header("Location: ".BASE_URL."cash");
            exit;
        }

        if(!$this->getbalance->getFinalyBalance()) {
            header("Location: ".BASE_URL."cash");
            exit;
        }
    }

    public function index() {
        $ac = new Acounts();
        $array = array(
            'user' => $this->user,
            'agency' => $this->agency,
            'acount' => $this->acount,
            'getbalance' => $this->getbalance,
            'dataTable' => $ac->getDataTable()
        ); 
        
        $this->loadTemplate('cash', $array);
    }

    public function index_cash() {
        $data = array();
        $ac = new Acounts();
        //SALVANDO INFORMAÇÕES
        if(isset($_POST['agency'])) {
            $agency = addslashes($_POST['agency']);
            $acount = addslashes($_POST['acount']);
            $type = addslashes($_POST['type']);
            $value = str_replace(",", ".", $_POST['value']);
            $value = floatval($value);

            $ac->getIDacount();
            $ac->getBalance();

            $data['informations'] = $ac->getInformations($agency, $acount, $type, $value);
        } 
        header("Location: ".BASE_URL."cash");
        exit;
    }
}