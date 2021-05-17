<?php

namespace App\models;

use PDO;

class Subcategs
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getSubcateg($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM subcategs WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();  
    }

    public function getSubcategSources($subcateg_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM subcategs_sources WHERE subcateg_id = :subcateg_id");
        $stmt->execute([
            'subcateg_id' => $subcateg_id
        ]);
        return $stmt->fetchAll();
    }

    public function getAllBandsForSubcateg($subcateg_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM bands WHERE subcateg_id = :subcateg_id");
        $stmt->execute([
            'subcateg_id' => $subcateg_id
        ]);
        return $stmt->fetchAll();
    }

    public function getAllCategsForSubcategs()
    {
        $stmt = $this->pdo->query("SELECT * FROM categs");
        return $stmt->fetchAll();
    }

    public function insertSubcateg ($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO subcategs (name, descr_main, descr_add, categ_id) VALUES (:name, :descr_main, :descr_add, :categ_id)");
        $stmt->execute([
            'name' => $data['name'],
            'descr_main' => $data['descr_main'],
            'descr_add' => $data['descr_add'],
            'categ_id' => $data['categ_id']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function updateSubcateg ($data)
    {
        $stmt = $this->pdo->prepare("UPDATE subcategs SET name = :name, descr_main = :descr_main, descr_add = :descr_add, categ_id = :categ_id WHERE id = :id");
        $stmt->execute ([
            'name' => $data['name'],
            'descr_main' => $data['descr_main'],
            'descr_add' => $data['descr_add'],
            'categ_id' => $data['categ_id'],
            'id' => $data['id']
        ]);
    }

    public function deleteSubcateg ($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM subcategs WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
}