<?php
namespace Controllers;
//CONTROLADOR DA SESSAO DE VENDAS
use \Core\Controller;
use \Models\Sales;
use \Models\Users;

class SalesController extends Controller {

	private $user;
    
    public function __construct() {
        $this->user = new Users();
        
        if(!$this->user->isLogged()) {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

	public function index() {
		$s = new Sales();
		$data = array(
			'user' => $this->user
		);

		$data['salesInfo'] = $s->getAll();

		$this->loadTemplate('sales', $data);
	}

	public function add_sales() {
		$s = new Sales();
		$array = array(
			'user' => $this->user
		);
		//ADICIONANDO NOVA VENDA NO SISTEMA
		if(!empty($_POST['name'])) {
			$name = addslashes($_POST['name']);
			$quantity = addslashes($_POST['quantity']);
			$val = addslashes($_POST['val']);
			$date_sale = '';

			$s->addSales($name, $quantity, $val, $date_sale);
		}

		$this->loadTemplate('add_sales', $array);
	}

	public function edit_sale($id) {
		$s = new Sales();
		$data = array(
			'user' => $this->user,
			'salesEdits' => $s->getValueEdit($id)
		);
		//EDITANDO A VENDA
		if(!empty($_POST['name'])) {
			$name = addslashes($_POST['name']);
			$quantity = addslashes($_POST['quantity']);
			$val = addslashes($_POST['val']);

			$s->salesEdit($id, $name, $quantity, $val);
		}

		$this->loadTemplate('edit_sale', $data);
	}
	//APAGANDO A VENDA
	public function del($id) {
		$s = new Sales();
		$s->delSales($id);
	}
}