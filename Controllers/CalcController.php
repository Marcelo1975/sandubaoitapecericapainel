<?php
namespace Controllers;
//CONTROLADO DA CALCULADORA
use \Core\Controller;
use \Models\Users;
use \Models\Results;

class CalcController extends Controller {
    
    private $user;
    
    public function __construct() {
        $this->user = new Users();
        
        if(!$this->user->isLogged()) {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $u = new Users();
        $results = new Results();
        $data = array(
            'user' => $this->user
        );
        if(isset($_POST['ant']) && !empty($_POST['ant'])) {
            $ant = addslashes($_POST['ant']);
            $results->addResult($ant);
        }

        $this->loadTemplate('calc', $data);
    }
    public function result_pdf() {
        $results = new Results();
        $array = array();

        $array['results'] = $results->getResults();

        ob_start();
        $this->loadView('result_pdf', $array);
        $html = ob_get_contents();
        ob_end_clean();

        $report = new \Mpdf\Mpdf();
        $report->WriteHTML($html);
        $report->Output('result.pdf', 'I');
        
    }
}