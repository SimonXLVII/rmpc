<?php

namespace App\models;

use PDO;

class Main
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getMain()
    {
        $stmt = $this->pdo->query("SELECT * FROM main");
        return $stmt->fetch();  
    }

    public function getMainSources()
    {
        $stmt = $this->pdo->query("SELECT * FROM main_sources");
        return $stmt->fetchAll();
    }

    public function getAllCategsForMain()
    {
        $stmt = $this->pdo->query("SELECT * FROM categs");
        return $stmt->fetchAll();
    }

    public function updateMain ($data) {
        $stmt = $this->pdo->prepare("UPDATE main SET name = :name, descr_main = :descr_main, descr_add = :descr_add, image = :image");
        $stmt->execute ([
            'name' => $data['name'],
            'descr_main' => $data['descr_main'],
            'descr_add' => $data['descr_add'],
            'image' => $data['image']
        ]);
    }
}