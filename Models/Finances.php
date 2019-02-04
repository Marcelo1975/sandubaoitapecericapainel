<?php
namespace Models;
//modelo da classe de gastos
use \Core\Model;

class Finances extends Model {
    //adiciona no gasto
	public function addFinances($energy, $water, $gas, $forRent, $officials, $providers, $data_operation) {
		$sql = "INSERT INTO finances (cemig, water, gas, for_rent, officials, providers, data_operation) VALUES (:cemig, :water, :gas, :for_rent, :officials, :providers, NOW())";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":cemig", $energy);
		$sql->bindValue(":water", $water);
		$sql->bindValue(":gas", $gas);
		$sql->bindValue(":for_rent", $forRent);
		$sql->bindValue(":officials", $officials);
		$sql->bindValue(":providers", $providers);
		$sql->execute();

		header("Location: ".BASE_URL."finances");
        exit;
	}
    //somando os gastos
    public function getRecipe() {
        $array = array();
        $sql = "SELECT SUM(cemig + water + gas + for_rent + officials + providers) as total FROM finances ORDER BY id DESC";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
            $array = $array['total'];
        }
        return $array;
    }
    //pega todos os gastos
    public function getAllFinances() {
        $array = array();

        $sql = "SELECT * FROM finances ORDER BY id DESC LIMIT 30";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }
        return $array;
    }
    //alimenta o grafico
    public function getFinances($period1, $period2) {
        $array = array();
        $currentDay = $period1;
        while($period2 != $currentDay) {
            $array[$currentDay] = 0;
            $currentDay = date('Y-m-d', strtotime('+1 day', strtotime($currentDay)));
        }

        $sql = "SELECT DATE_FORMAT(data_operation, '%Y-%m-%d') as data_operation, SUM(cemig + water + gas + for_rent + officials + providers) as total FROM finances WHERE :period1 AND :period2 GROUP BY DATE_FORMAT(data_operation, '%Y-%m-%d')";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":period1", $period1);
        $sql->bindValue(":period2", $period2);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $lines = $sql->fetchAll();
            foreach ($lines as $finance_item) {
                $array[$finance_item['data_operation']] = $finance_item['total'];
            }
        }
        return $array;
    }
    //pega os valores dos gastos
    public function getValuesFinances($id) {
    	$data = array();

    	$sql = "SELECT * FROM finances WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
        	$data = $sql->fetchAll();
        } 
    	return $data;
    }
    //edita os valores dos gastos
    public function editFinances($id, $energy, $water, $gas, $forRent, $officials, $providers) {
    	$sql = "UPDATE finances SET cemig = :cemig, water = :water, gas = :gas, for_rent = :for_rent, officials = :officials, providers = :providers WHERE id = :id" ;
    	$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->bindValue(":cemig", $energy);
		$sql->bindValue(":water", $water);
		$sql->bindValue(":gas", $gas);
		$sql->bindValue(":for_rent", $forRent);
		$sql->bindValue(":officials", $officials);
		$sql->bindValue(":providers", $providers);
		$sql->execute();

		header("Location: ".BASE_URL."finances");
        exit;
    }
    //apaga toda a linha de gasto
    public function deleteFinances($id) {
    	$sql = "DELETE FROM finances WHERE id = :id";
    	$sql = $this->db->prepare($sql);
    	$sql->bindValue(":id", $id);
    	$sql->execute();
    }
    //alimenta o documento PDF
    public function getReportFinances() {
        $data = array();

        $sql = "SELECT * FROM finances ORDER BY id DESC LIMIT 30";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }

        return $data;
    }

}