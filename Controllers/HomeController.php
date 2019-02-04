<?php
namespace Controllers;
//CONTROLADO DA HOME
use \Core\Controller;
use \Models\Users;
use \Models\Finances;
use \Models\Sales;
use \Models\Annotations;

class HomeController extends Controller {
    
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
        $s = new Sales();
        $u = new Users();
        $annotations = new Annotations();
        $data = array(
            'user' => $this->user
        );
        //SALVANDO SESSÃO DE NOTIFICAÇÕES
        if(isset($_POST['title']) && !empty($_POST['title'])) {
            $title = addslashes($_POST['title']);
            $annotation = addslashes($_POST['msg']);

            $annotations->add($title, $annotation);
        }

        $data['annotations'] = $annotations->getAll();
        //DIAS DO MES
        $data['days_list'] = array();
        for($q=31;$q>0;$q--) {
            $data['days_list'][] = date('d/m', strtotime('-'.$q.' days'));
        }
        //ALIMENTA O GRAFICO
        $data['finances'] = $f->getFinances(date('Y-m-d', strtotime('-30 days')), date('Y-m-d'));
        $data['sales'] = $s->getSalesGraphic(date('Y-m-d', strtotime('-30 days')), date('Y-m-d'));
        //COOKIE COM VALIDADE DE 30 DIAS
        setcookie('recipeValues', time() + (30 * 24 * 3600));
        setcookie('salesValues', time() + (30 * 24 * 3600));

        $_COOKIE['recipeValues'] = $f->getRecipe();
        $_COOKIE['salesValues'] = $s->getSales();

        $this->loadTemplate('home', $data);
    }
    //APRESENTAÇÃO DAS ANOTAÇÕES
    public function viewAnnotation($id) {
        $annotations = new Annotations();
        $array = array(
            'user' => $this->user
        );

        $array['annotation'] = $annotations->getAnnotation($id);

        $this->loadTemplate('viewAnno', $array);
    }

}