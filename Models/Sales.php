<?php
namespace Models;
//modelo para classe de vendas
use \Core\Model;

class Sales extends Model {
    //adiciona uma venda ao sistema
	public function addSales($name, $quantity, $val, $date_sale) {
		$sql = "INSERT INTO sales (name, quantity, value, date_sale) VALUES (:name, :quantity, :value, NOW())";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":name", $name);
		$sql->bindValue(":quantity", $quantity);
		$sql->bindValue(":value", $val);
		$sql->execute();

		header("Location: ".BASE_URL."sales");
		exit;
	}
    //pega todas as vandas do sistema
    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM sales ORDER BY id DESC LIMIT 30";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
    //alimenta o grafico
    public function getSalesGraphic($period1, $period2) {
        $array = array();
        $currentDay = $period1;
        while($period2 != $currentDay) {
            $array[$currentDay] = 0;
            $currentDay = date('Y-m-d', strtotime('+1 day', strtotime($currentDay)));
        }

        $sql = "SELECT DATE_FORMAT(date_sale, '%Y-%m-%d') as date_sale, SUM(value) as total FROM sales WHERE :period1 AND :period2 GROUP BY DATE_FORMAT(date_sale, '%Y-%m-%d')";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":period1", $period1);
        $sql->bindValue(":period2", $period2);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $lines = $sql->fetchAll();
            foreach ($lines as $sales_item) {
                $array[$sales_item['date_sale']] = $sales_item['total'];
            }
        }

        return $array;
    }
    //pegando a venda filtrada pelo id
    public function getValueEdit($id) {
    	$data = array();

    	$sql = "SELECT * FROM sales WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();

    	if($sql->rowCount() > 0) {
    		$data = $sql->fetchAll();
    	}

    	return $data;
    }
    //editando a venda
    public function salesEdit($id, $name, $quantity, $val) {
    
    	$sql = "UPDATE sales SET name = :name, quantity = :quantity, value = :value WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->bindValue(":name", $name);
        $sql->bindValue(":quantity", $quantity);
    	$sql->bindValue(":value", $val);
    	$sql->execute();

    	header("Location: ".BASE_URL."sales");
    	exit; 
    }
    //pegando a soma do campo vendas
    public function getSales() {

        $sql = "SELECT SUM(value) as result FROM sales";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $result = $sql->fetch();
            $data = $result['result'];
        }
        return $data;
    }
    //apagando a venda
    public function delSales($id) {
        $sql = "DELETE FROM sales WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        header("Location: ".BASE_URL."sales");
        exit;
    }

}