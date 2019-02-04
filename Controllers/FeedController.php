<?php
namespace Controllers;
//CONTROLADO DO FEED DO SITE
use \Core\Controller;
use \Models\Users;
use \Models\Feed;

class FeedController extends Controller {
    
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

        $f = new Feed();
        //ADICIONANDO DADOS PARA O SITE
        $f->imageSlideSave();
        $f->news();
        $f->featureeds();        
        $f->aboutPage();
        

        $this->loadTemplate('feed', $array);
    }

}