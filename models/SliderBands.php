<?php

namespace App\models;

use PDO;

class SliderBands
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getBandSources($band_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM bands_sources WHERE band_id = :band_id");
        $stmt->execute([
            'band_id' => $band_id
        ]);
        return $stmt->fetchAll();
    }

    public function getBandSource($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM bands_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function insertBandSource ($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO bands_sources (name, descr, band_id) VALUES (:name, :descr, :band_id)");
        $stmt->execute([
            'name' => $data['name'],
            'descr' => $data['descr'],
            'band_id' => $data['band_id']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function deleteBandSource ($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM bands_sources WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
}