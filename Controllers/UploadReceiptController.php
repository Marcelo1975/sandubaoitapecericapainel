<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Receipt;

class UploadReceiptController extends Controller {

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
        $receipt = new Receipt();
        
        $receipt->add();
        $receipt->addRecib();
        $array['receipts'] = $receipt->getAll();
        $array['recibs'] = $receipt->getAllRecib();

        $this->loadTemplate('receipt', $array);
    }
}