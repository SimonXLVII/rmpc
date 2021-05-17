<?php

namespace App\models;

use PDO;

class SliderMain
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getMainSources()
    {
        $stmt = $this->pdo->query("SELECT * FROM main_sources");
        return $stmt->fetchAll();
    }

    public function getMainSource($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM main_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function insertMainSource ($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO main_sources (name, descr, main_id) VALUES (:name, :descr, :main_id)");
        $stmt->execute([
            'name' => $data['name'],
            'descr' => $data['descr'],
            'main_id' => 1
        ]);
        return $this->pdo->lastInsertId();
    }

    public function deleteMainSource ($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM main_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
}