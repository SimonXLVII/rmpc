<?php

namespace App\models;

use PDO;

class Categs
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCateg($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM categs WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();  
    }

    public function getCategSources($categ_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM categs_sources WHERE categ_id = :categ_id");
        $stmt->execute([
            'categ_id' => $categ_id
        ]);
        return $stmt->fetchAll();
    }

    public function getAllSubcategsForCateg($categ_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM subcategs WHERE categ_id = :categ_id");
        $stmt->execute([
            'categ_id' => $categ_id
        ]);
        return $stmt->fetchAll();
    }

    public function updateCateg ($data) {
        $stmt = $this->pdo->prepare("UPDATE categs SET name = :name, descr_main = :descr_main, descr_add = :descr_add, image = :image WHERE id = :id");
        $stmt->execute ([
            'name' => $data['name'],
            'descr_main' => $data['descr_main'],
            'descr_add' => $data['descr_add'],
            'image' => $data['image'],
            'id' => $data['id']
        ]);
    }
}