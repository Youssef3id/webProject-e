<?php
class Product {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function getAll() {
        $result = $this->db->query("SELECT * FROM products");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getById($id) {
        $id = $this->db->escape($id);
        $result = $this->db->query("SELECT * FROM products WHERE id = '$id'");
        return $result->fetch_assoc();
    }
} 