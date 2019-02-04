<?php
namespace Controllers;
//CONTROLADOR DO RH
use \Core\Controller;
use \Models\Users;
use \Models\Humanrecurses;

class HumanresourcesController extends Controller {
    
    private $user;
    
    public function __construct() {
        $this->user = new Users();
        
        if(!$this->user->isLogged()) {
            header("Location: ".BASE_URL."login");
            exit;
        }
        
    }

    public function index() {
        $h = new Humanrecurses();
        $array = array(
            'user' => $this->user,
            'getEmployeeAdds' => $h->getEmployees()
        );
        //APRESENTAÇÃO INICIAL
        $this->loadTemplate('rh', $array);
    }

    public function add() {
        $data = array(
            'user' => $this->user
        );
        $h = new Humanrecurses();
        //ADICIONANDO FUNCIONARIOS
        if(isset($_POST['fistname']) && !empty($_POST['fistname'])) {
            $fistname = addslashes($_POST['fistname']);
            $lastname = addslashes($_POST['lastname']);
            $work = addslashes($_POST['work']);
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);
            $salary = addslashes($_POST['salary']);

            if(isset($_POST['enter'])) {                
                $enter = addslashes($_POST['enter']);
            } else {
                $enter = '00/00/0000';
            }

            if(isset($_POST['exit'])) {                
                $exit = addslashes($_POST['exit()']);
            } else {
                $exit = '00/00/0000';
            }

            $h->addEmployee($fistname, $lastname, $work, $enter, $exit, $email, $phone, $salary);     

            header("Location: ".BASE_URL."humanresources");
            exit;
        }         

        $this->loadTemplate('employee', $data);
    }

    public function edit($id) {
        $h = new Humanrecurses();
        $array = array(
            'user' => $this->user,
            'getAll' => $h->getAllInfo($id)
        );
        //EDITANDO FUNCIONARIOS
        if(isset($_POST['fistname']) && !empty($_POST['fistname'])) {
            $fistname = addslashes($_POST['fistname']);
            $lastname = addslashes($_POST['lastname']);
            $work = addslashes($_POST['work']);
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);
            $salary = addslashes($_POST['salary']);

            if(isset($_POST['enter']) && !empty($_POST['enter'])) {                
                $enter = addslashes($_POST['enter']);
            } else {
                $enter = '00/00/0000';
            }

            if(isset($_POST['exit']) && !empty($_POST['exit()'])) {                
                $exit = addslashes($_POST['exit()']);
            } else {
                $exit = '00/00/0000';
            }

            $h->editEmployee($id, $fistname, $lastname, $work, $enter, $exit, $email, $phone, $salary);

            header("Location: ".BASE_URL."humanresources");
            exit;
        }

        $this->loadTemplate('edit_employee', $array);         
    }
    //APAGANDO FUNCIONARIOS
    public function del($id) {
        $h = new Humanrecurses();
        $h->deleteEmployee($id);

        header("Location: ".BASE_URL."humanresources");
        exit;
    }

}