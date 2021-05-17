<?php
namespace App\models;
use PDO;

class Auth
{
    private $pdo;

    public function __construct (PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function auth ($email, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([
            'email' => $email
        ]);
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}