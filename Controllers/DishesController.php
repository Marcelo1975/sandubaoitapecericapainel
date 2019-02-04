<?php
namespace Controllers;
//CONTROLADOR DA AREA DE CARDAPIO
use \Core\Controller;
use \Models\Users;
use \Models\Dishes;

class DishesController extends Controller {
	 private $user;

	 public function __construct() {
        $this->user = new Users();
        
        if(!$this->user->isLogged()) {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $array = array(
            'user' => $this->user
        );
        $d = new Dishes();
        //CAPTURANDO INFORMAÇÕES
        $array['dishes'] = $d->getAll();
        $array['dishesGourmets'] = $d->getAllGourmet();
        $array['dishesGiants'] = $d->getAllGiant();

        $this->loadTemplate('dishes', $array);
    }

    public function add() {
        $data = array(
            'user' => $this->user
        );
        $d = new Dishes();
        //ADICIONANDO INFORMAÇÕES
        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
            $description = addslashes($_POST['description']);

            $d->addDishes($name, $description);
        }

        if(isset($_POST['name_gourmet']) && !empty($_POST['name_gourmet'])) {
            $name_gourmet = addslashes($_POST['name_gourmet']);
            $description_gourmet = addslashes($_POST['description_gourmet']);

            $d->addDishesGourmet($name_gourmet, $description_gourmet);
        }

        if(isset($_POST['name_giant']) && !empty($_POST['name_giant'])) {
            $name_giant = addslashes($_POST['name_giant']);
            $description_giant = addslashes($_POST['description_giant']);

            $d->addDishesGiant($name_giant, $description_giant);
        }
        $this->loadTemplate('add_dishes', $data);
    }

    public function edit($id) {
        $d = new Dishes();
        $data = array(
            'user' => $this->user,
            'editDishes' => $d->getAllEdit($id)
        );
        //EDITANDO INFORMAÇÕES
        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
            $description = addslashes($_POST['description']);

            $d->editDishe($id, $name, $description);
        }

        $this->loadTemplate('editDishes', $data);
    }

    public function editgourmet($id) {
        $d = new Dishes();
        $data = array(
            'editDishesGourmets' => $d->getAllEditGourmet($id)
        );

        if(isset($_POST['name_gourmet']) && !empty($_POST['name_gourmet'])) {
            $name_gourmet = addslashes($_POST['name_gourmet']);
            $description_gourmet = addslashes($_POST['description_gourmet']);

            $d->editDishesGourmet($id, $name_gourmet, $description_gourmet);
        }

        $this->loadTemplate('editDishesGourmet', $data);
    }

    public function editgiant($id) {
        $d = new Dishes();
        $data = array(
            'editDishesGiants' => $d->getAllEditGiant($id)
        );

        if(isset($_POST['name_giant']) && !empty($_POST['name_giant'])) {
            $name_giant = addslashes($_POST['name_giant']);
            $description_giant = addslashes($_POST['description_giant']);

            $d->editDishesGiant($id, $name_giant, $description_giant);
        }

        $this->loadTemplate('editDishesGiant', $data);
    }
    //EXCLUINDO INFORMAÇÕES
    public function del($id) {
        $d = new Dishes();
        $d->deleteDishesTr($id);

        header("Location: ".BASE_URL."dishes");
        exit;
    }

    public function delgourmet($id) {
        $d = new Dishes();
        $d->deleteDishesGourmet($id);

        header("Location: ".BASE_URL."dishes");
        exit;
    }

    public function delgiant($id) {
        $d = new Dishes();
        $d->deleteDishesGiant($id);

        header("Location: ".BASE_URL."dishes");
        exit;
    }
}