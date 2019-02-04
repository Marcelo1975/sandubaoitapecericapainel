<?php
namespace Models;
//MODELO DA CLASSE DE CONTAS
use \Core\Model;

class Acounts extends Model {

	private $getagency;
	private $getacount;
	private $getbalance;
	private $idacount;
    private $userName;
    //PEGANDO DADOS PRIVADOS
    public function getIDacount() {
    	$sql = "SELECT id FROM acounts";
    	$sql = $this->db->query($sql);

    	if($sql->rowCount() > 0) {
    		$idacount = $sql->fetch();
    		$_SESSION['bank'] = $idacount['id'];

    		return true; 
    	} else {
    		return false;
    	}
    }

    public function getAgency() {
    	$sql = "SELECT * FROM acounts";
    	$sql = $this->db->query($sql);

    	if($sql->rowCount() > 0) {
    		$getagency = $sql->fetch();
    		$this->getagency = $getagency['agency'];

    		return true; 
    	} else {
    		return false;
    	}
    }

    public function getFinalyBalance() {
    	$sql = "SELECT balance FROM acounts";
    	$sql = $this->db->query($sql);

    	if($sql->rowCount() > 0) {
    		$getbalance = $sql->fetch();
    		$this->getbalance = $getbalance['balance'];

    		return true; 
    	} else {
    		return false;
    	}
    }

    public function getAcount() {
    	$sql = "SELECT * FROM acounts";
    	$sql = $this->db->query($sql);

    	if($sql->rowCount() > 0) {
    		$getacount = $sql->fetch();
    		$this->getacount = $getacount['acount'];

    		return true; 
    	} else {
    		return false;
    	}
    }

    public function getIDac() {
    	return $this->idacount;
    }

    public function getName() {
        return $this->userName;
    }

    public function getNameAgency() {
    	return $this->getagency;
    }

    public function getNameAcount() {
    	return $this->getacount;
    }

    public function getBalanceFinaly() {
    	return $this->getbalance;
    }

    public function getBalance() {
    	$sql = "SELECT balance FROM acounts WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $_SESSION['bank']);
    	$sql->execute();

    	if($sql->rowCount() > 0) {
    		$sql = $sql->fetch();
    		$_SESSION['balance'] = $sql['balance'];
    	}
    }
    //INFORMAÇÕES PESSOAIS
    public function getInformations($agency, $acount, $type, $value) {
        $array = array();

        $sql = "SELECT * FROM acounts WHERE agency = :agency AND acount = :acount";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":agency", $agency);
        $sql->bindValue(":acount", $acount);
        $sql->execute();

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();

        	$sql = "INSERT INTO historic (id_acount, type, value, data_operation) VALUES (:id_acount, :type, :value, NOW())";
	    	$sql = $this->db->prepare($sql);
	    	$sql->bindValue(":id_acount", $_SESSION['bank']);
	    	$sql->bindValue(":type", $type);
	    	$sql->bindValue(":value", $value);
	    	$sql->execute();

	    	if($type == '0') {
	    		//Depósito
	    		$balance = $_SESSION['balance'] + $value;
	        	$sql = "UPDATE acounts SET balance = :balance WHERE id = :id";
	        	$sql = $this->db->prepare($sql);
	        	$sql->bindValue(":balance", $balance);
	        	$sql->bindValue(":id", $_SESSION['bank']);
	        	$sql->execute();
	        } else {
	        	//Saque
	    		$balance = $_SESSION['balance'] - $value;
	        	$sql = "UPDATE acounts SET balance = :balance WHERE id = :id";
	        	$sql = $this->db->prepare($sql);
	        	$sql->bindValue(":balance", $balance);
	        	$sql->bindValue(":id", $_SESSION['bank']);
	        	$sql->execute();
	        }

        	return $array;
        }       

    	header("Location: ".BASE_URL."cash");
    	exit;
    }
    //apresentando resultados
    public function getDataTable() {
    	$data = array();
        if(isset($_SESSION['bank']) && !empty($_SESSION['bank'])) {
        	$sql = "SELECT * FROM historic WHERE id_acount = :id_acount ORDER BY id DESC LIMIT 3";
        	$sql = $this->db->prepare($sql);
        	$sql->bindValue(":id_acount", $_SESSION['bank']);
        	$sql->execute();

        	if($sql->rowCount() > 0) {
        		$data = $sql->fetchAll();
        		return $data;
        	} 
        } else {
            return array();
        }
    }

}