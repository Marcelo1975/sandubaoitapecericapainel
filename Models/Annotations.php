<?php
namespace Models;
//modelo para classe de anotações
use \Core\Model;

class Annotations extends Model {
    //adiciona anotação
	public function add($title, $annotation) {
		$sql = "INSERT INTO  annotations (title, body) VALUES (:title, :body)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":title", $title);
		$sql->bindValue(":body", $annotation);
		$sql->execute();
	}
    //pega a anotação
    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM annotations ORDER BY id DESC";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getAllAnotHome() {
        $array = array();

        $sql = "SELECT * FROM annotations ORDER BY id DESC LIMIT 3";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getAnnotation($id) {
        $data = array();

        $sql = "SELECT * FROM annotations WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }

        return $data;
    }

}