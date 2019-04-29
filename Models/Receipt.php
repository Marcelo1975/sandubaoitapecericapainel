<?php
namespace Models;
//modelo para classe de Comprovantes/Recibos
use \Core\Model;

class Receipt extends Model {
    
    public function add() {
        if(isset($_POST['receiptName']) && !empty($_POST['receiptName'])) {
            $receiptName = addslashes($_POST['receiptName']);

            if(isset($_FILES['receiptImg']) && !empty($_FILES['receiptImg']['tmp_name'])) {
                $extensions = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['receiptImg']['type'], $extensions)) {

                    $nameImage = md5(time().rand(0, 999)).'.jpg';

                    move_uploaded_file($_FILES['receiptImg']['tmp_name'],'./assets/images/receipts/'.$nameImage);
                    
			    	$sql = "INSERT INTO receipt (name, url) VALUES (:name, :url)";
			    	$sql = $this->db->prepare($sql);
			    	$sql->bindValue(":name", $receiptName);
			    	$sql->bindValue(":url", $nameImage);
			    	$sql->execute();
                }
            }
        }
    }

    public function addRecib() {
        if(isset($_POST['recibName']) && !empty($_POST['recibName'])) {
            $recibName = addslashes($_POST['recibName']);

            if(isset($_FILES['recibImg']) && !empty($_FILES['recibImg']['tmp_name'])) {
                $extensions = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['recibImg']['type'], $extensions)) {

                    $nameImage = md5(time().rand(0, 999)).'.jpg';

                    move_uploaded_file($_FILES['recibImg']['tmp_name'],'./assets/images/recibs/'.$nameImage);
                    
			    	$sql = "INSERT INTO recib (name, url) VALUES (:name, :url)";
			    	$sql = $this->db->prepare($sql);
			    	$sql->bindValue(":name", $recibName);
			    	$sql->bindValue(":url", $nameImage);
			    	$sql->execute();
                }
            }
        }
    }

    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM receipt";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getAllRecib() {
        $array = array();

        $sql = "SELECT * FROM recib";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}