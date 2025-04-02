<?php
class User {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function login($email, $password) {
        $email = $this->db->escape($email);
        $password = md5($password); // Note: Use better hashing in production
        
        $result = $this->db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        return $result->fetch_assoc();
    }
    
    public function register($data) {
        // Implementation
    }
} 