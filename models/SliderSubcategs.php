<?php

namespace App\models;

use PDO;

class SliderSubcategs
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getSubcategSources($subcateg_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM subcategs_sources WHERE subcateg_id = :subcateg_id");
        $stmt->execute([
            'subcateg_id' => $subcateg_id
        ]);
        return $stmt->fetchAll();
    }

    public function getSubcategSource($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM subcategs_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function insertSubcategSource ($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO subcategs_sources (name, descr, subcateg_id) VALUES (:name, :descr, :subcateg_id)");
        $stmt->execute([
            'name' => $data['name'],
            'descr' => $data['descr'],
            'subcateg_id' => $data['subcateg_id']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function deleteSubcategSource ($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM subcategs_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
}