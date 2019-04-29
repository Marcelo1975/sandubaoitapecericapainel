<?php
namespace Models;
//modelo para classe de pessoal
use \Core\Model;

class Humanrecurses extends Model {
    //adiciona um novo empregado
    public function addEmployee($fistname, $lastname, $work, $enter, $exit, $email, $phone, $salary) {
    	$sql = "INSERT INTO humanrecurces (fistname, lastname, work, data_enter, data_exit, email, phone, salary) VALUES (:fistname, :lastname, :work, :data_enter, :data_exit, :email, :phone, :salary)";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":fistname", $fistname);
    	$sql->bindValue(":lastname", $lastname);
        $sql->bindValue(":work", $work);
        $sql->bindValue(":data_enter", $enter);
        $sql->bindValue(":data_exit", $exit);
    	$sql->bindValue(":email", $email);
    	$sql->bindValue(":phone", $phone);
    	$sql->bindValue(":salary", $salary);
    	$sql->execute();

    	return $this->db->lastInsertId();
    }
    //pega todos os funcionarios cadastrados filtrado por ids
    public function getAllInfo($id) {
    	$data = array();

    	$sql = "SELECT * FROM humanrecurces WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();

    	if($sql->rowCount() > 0) {
    		$data = $sql->fetchAll();
    	}
    	return $data;
    }
    //pega todos os funcionarios cadastrados
    public function getEmployees() {
    	$data = array();

    	$sql = "SELECT * FROM humanrecurces";
    	$sql = $this->db->query($sql);

    	if($sql->rowCount() > 0) {
    		$data = $sql->fetchAll();
    	}
    	return $data;
    }
    //editando funcionario
    public function editEmployee($id, $fistname, $lastname, $work, $enter, $exit, $email, $phone, $salary) {
		$sql = "UPDATE humanrecurces SET fistname = :fistname, lastname = :lastname, work = :work, data_enter = :data_enter, data_exit = :data_exit, email = :email, phone = :phone, salary = :salary WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->bindValue(":fistname", $fistname);
    	$sql->bindValue(":lastname", $lastname);
        $sql->bindValue(":work", $work);
        $sql->bindValue(":data_enter", $enter);
        $sql->bindValue(":data_exit", $exit);
    	$sql->bindValue(":email", $email);
    	$sql->bindValue(":phone", $phone);
    	$sql->bindValue(":salary", $salary);
    	$sql->execute();
    }
    //apagando funcionario
    public function deleteEmployee($id) {
    	$sql = "DELETE FROM humanrecurces WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();
    }

}