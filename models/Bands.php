<?php

namespace App\models;

use PDO;

class Bands
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getBand($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM bands WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();  
    }

    public function getBandSources($band_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM bands_sources WHERE band_id = :band_id");
        $stmt->execute([
            'band_id' => $band_id
        ]);
        return $stmt->fetchAll();
    }

    public function getAllSubcategsForBands()
    {
        $stmt = $this->pdo->query("SELECT * FROM subcategs");
        return $stmt->fetchAll();
    }

    public function insertBand ($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO bands (name, descr_main, descr_add, image, subcateg_id) VALUES (:name, :descr_main, :descr_add, :image, :subcateg_id)");
        $stmt->execute([
            'name' => $data['name'],
            'descr_main' => $data['descr_main'],
            'descr_add' => $data['descr_add'],
            'image' => $data['image'],
            'subcateg_id' => $data['subcateg_id']
        ]);
        return $this->pdo->lastInsertId();
    }
    
    public function updateBand ($data) {
        $stmt = $this->pdo->prepare("UPDATE bands SET name = :name, descr_main = :descr_main, descr_add = :descr_add, image = :image WHERE id = :id");
        $stmt->execute ([
            'name' => $data['name'],
            'descr_main' => $data['descr_main'],
            'descr_add' => $data['descr_add'],
            'image' => $data['image'],
            'id' => $data['id']
        ]);
    }

    public function deleteBand ($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM bands WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
}