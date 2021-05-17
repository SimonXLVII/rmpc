<?php

namespace App\models;

use PDO;

class SliderCategs
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCategSources($categ_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM categs_sources WHERE categ_id = :categ_id");
        $stmt->execute([
            'categ_id' => $categ_id
        ]);
        return $stmt->fetchAll();
    }

    public function getCategSource($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM categs_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function insertCategSource ($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO categs_sources (name, descr, categ_id) VALUES (:name, :descr, :categ_id)");
        $stmt->execute([
            'name' => $data['name'],
            'descr' => $data['descr'],
            'categ_id' => $data['categ_id']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function deleteCategSource ($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM categs_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
}