<?php
namespace Models;
//modelo para a classe de cardapio
use \Core\Model;

class Dishes extends Model {
    //pega todos os itens da lista de cardapio
    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM menu";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //editar item da sessão tradicional
    public function getAllEdit($id) {
    	$array = array();

        $sql = "SELECT * FROM menu WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //edita item da linha gourmet
    public function getAllEditGourmet($id) {
    	$array = array();

        $sql = "SELECT * FROM menu_gourmet WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //edita item da linha gigante
    public function getAllEditGiant($id) {
    	$array = array();

        $sql = "SELECT * FROM menu_giant WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //pega item da linha gourmet
    public function getAllGourmet() {
        $array = array();

        $sql = "SELECT * FROM menu_gourmet";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //pega item da linha gigante
    public function getAllGiant() {
        $array = array();

        $sql = "SELECT * FROM menu_giant";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //adiciona item a lista de cardapio tradicional
    public function addDishes($name, $description, $price) {
    	$sql = "INSERT INTO menu (name, description, price) VALUES (:name, :description, :price)";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":name", $name);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":price", $price);
    	$sql->execute();

    	header("Location: ".BASE_URL."dishes");
    	exit;
    }
    //adiciona item a lista da linha gourmet
    public function addDishesGourmet($name_gourmet, $description_gourmet) {
    	$sql = "INSERT INTO menu_gourmet (name, description) VALUES (:name, :description)";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":name", $name_gourmet);
    	$sql->bindValue(":description", $description_gourmet);
    	$sql->execute();

    	header("Location: ".BASE_URL."dishes");
    	exit;
    }
    //adiciona item a lista da linha gigante
    public function addDishesGiant($name_giant, $description_giant) {
    	$sql = "INSERT INTO menu_giant (name, description) VALUES (:name, :description)";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":name", $name_giant);
    	$sql->bindValue(":description", $description_giant);
    	$sql->execute();

    	header("Location: ".BASE_URL."dishes");
    	exit;
    }
    //edita item da linha tradicional
    public function editDishe($id, $name, $description, $price) {
    	$sql = "UPDATE menu SET name = :name, description = :description, price = :price WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->bindValue(":name", $name);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":price", $price);
    	$sql->execute();

    	header("Location: ".BASE_URL."dishes");
    	exit;
    }
    //edita item da linha gourmet
    public function editDishesGourmet($id, $name_gourmet, $description_gourmet) {
    	$sql = "UPDATE menu_gourmet SET name = :name, description = :description WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->bindValue(":name", $name_gourmet);
    	$sql->bindValue(":description", $description_gourmet);
    	$sql->execute();

    	header("Location: ".BASE_URL."dishes");
    	exit;
    }
    //edita item da linha gigante
    public function editDishesGiant($id, $name_giant, $description_giant) {
    	$sql = "UPDATE menu_giant SET name = :name, description = :description WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->bindValue(":name", $name_giant);
    	$sql->bindValue(":description", $description_giant);
    	$sql->execute();

    	header("Location: ".BASE_URL."dishes");
    	exit;
    }
    //apaga item da linha tradicional
    public function deleteDishesTr($id) {
    	$sql = "DELETE FROM menu WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();
    }
    //apaga item da linha gourmet
    public function deleteDishesGourmet($id) {
    	$sql = "DELETE FROM menu_gourmet WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();
    }
    //apaga item da linha gigante
    public function deleteDishesGiant($id) {
    	$sql = "DELETE FROM menu_giant WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();
    }

}