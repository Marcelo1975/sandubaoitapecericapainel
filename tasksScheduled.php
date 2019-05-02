<?php
// Limpeza automatica
public function cronSales() {
    $sql = "DELETE * FROM sales";
    $this->db->query($sql);
}

// Limpeza automatica
public function cronFinances() {
    $sql = "DELETE * FROM finances";
    $this->db->query($sql);
}