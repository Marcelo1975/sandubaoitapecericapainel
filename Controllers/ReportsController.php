<?php
namespace Controllers;
//CONTROLADO DA SESSAO DE RELATORIOS
use \Core\Controller;
use \Models\Users;
use \Models\Finances;
use \Models\Sales;

class ReportsController extends Controller {
    
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
        //PAGINA PRINCIPAL

        $this->loadTemplate('report', $array);
    }

    public function sale_pdf() {
        $sales = new Sales();
        $array = array();       
        //GERANDO PDF
        $array['reportSales'] = $sales->getAll();

        ob_start();
        $this->loadView('sale_pdf', $array);
        $html = ob_get_contents();
        ob_end_clean();

        $report = new \Mpdf\Mpdf();
        $report->WriteHTML($html);
        $report->Output('relatorio.pdf', 'I');
        $array = array();
    }

    public function spending_pdf() {
        $f = new Finances();
        $array = array();       
        //GERANDO PDF
        $array['reportFinances'] = $f->getReportFinances();

        ob_start();
        $this->loadView('spending_pdf', $array);
        $html = ob_get_contents();
        ob_end_clean();

        $report = new \Mpdf\Mpdf();
        $report->WriteHTML($html);
        $report->Output('relatorio.pdf', 'I');
        
    }
}