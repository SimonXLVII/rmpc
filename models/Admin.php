<?php
namespace App\models;
use PDO;

class Admin
{
    private $pdo;

    public function __construct (PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAdmin ()
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetch(); 
    }

    public function getAllCategs ()
    {
        $stmt = $this->pdo->query("SELECT * FROM categs");
        return $stmt->fetchAll(); 
    }

    public function getAllSubcategs ()
    {
        $stmt = $this->pdo->query("SELECT * FROM subcategs");
        return $stmt->fetchAll(); 
    }

    public function getAllBands ()
    {
        $stmt = $this->pdo->query("SELECT * FROM bands");
        return $stmt->fetchAll(); 
    }
    
    public function updateAdmin ($data)
    {
        $stmt = $this->pdo->prepare("UPDATE users SET name = :name, email = :email, password = :password, image = :image");
        $stmt->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'image' => $data['image']
        ]);
    }
}