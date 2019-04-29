<?php
namespace Models;
//modelo para a classe de Resultados
use \Core\Model;

class Results extends Model{

    public function addResult($ant) {
        $sql = "INSERT INTO results (result, data) VALUES (:result, NOW())";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":result", $ant);
        $sql->execute();
    }

    public function getResults() {
        $array = array();
        
        $sql = "SELECT * FROM results ORDER BY id DESC LIMIT 30";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}
