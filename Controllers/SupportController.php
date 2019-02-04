<?php
namespace Controllers;
//CONTROLADOR DA SESSAO DE SUPORTE
use \Core\Controller;
use \Models\Users;

class SupportController extends Controller {
    
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
           'user' => $this->user,
           'warning' => ''
        );
        //ENVIANDO E-MAIL
        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $subjectmatter = addslashes($_POST['subjectmatter']);
            $msg = addslashes($_POST['msg']);

            $to = "contato@m18web.com.br";
            $body = "Nome: ".$name." - E-mail: ".$email." - Mensagem: ".$msg;
            $header = "From: contato@m18web.com.br"."\n\r".
                      "Replay-To: ".$email."\r\n".
                      "X-Mailer: PHP/".phpversion();
            //mail($to, $subjectmatter, $body, $header);

            $array['warning'] = "E-mail enviado com sucesso!";
        } 

        $this->loadTemplate('support', $array);
    }
}