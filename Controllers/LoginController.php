<?php
namespace Controllers;
//CONTROLADOR DE LOGIN
use \Core\Controller;
use \Models\Users;

class LoginController extends Controller {
    public function index() {
        $array = array(
            'error' => ''
        );

        if(!empty($_SESSION['errorMsg'])) {
            $array['error'] = $_SESSION['errorMsg'];
            $_SESSION['errorMsg'] = '';
        }

        $this->loadView('login', $array);
    }
    //ADICIONA NOVO USUARIO
    public function add_user() {
        $array = array();

        $this->loadView('add_user', $array);
    }
    //AÇÃO DE ADICIONAR
    public function add_action() {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = md5($_POST['password']);

            if(!empty($_POST['adm'])){
                $admin = $_POST['adm'];
                $admin = '1';
            } else {
                $admin = '';
            }

            $u = new Users();
            $u->insertUser($name, $email, $password, $admin);
        } else {
            $_SESSION['errorMsg'] = 'Preencha os campos abaixo!';
        }
        header("Location: ".BASE_URL."login");
        exit;
    }
    //VERIFICAÇÃO E VALIDADÇÃO DE LOGIN
    public function index_action() {
        if(!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $u = new Users();
            if($u->validationLogin($email, $password)) {
                header("Location: ".BASE_URL);
                exit;
            } else {
                $_SESSION['errorMsg'] = 'Usuário e/ou senha errados!';
            }
        } else {
            $_SESSION['errorMsg'] = 'Preencha os campos abaixo.';
        }
        header("Location: ".BASE_URL."login");
        exit;
    }
    //DESLOGANDO DO SISTEMA
    public function logout() {
        unset($_SESSION['token']);
        header("Location: ".BASE_URL);
        exit;
    }

}

