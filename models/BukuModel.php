<?php
require_once "config/database.php";

class BukuModel {
    private $conn;
    private $table_name = "buku";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllBuku() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createBuku($judul, $penulis, $tahun_terbit) {
        $query = "INSERT INTO " . $this->table_name . " (judul, penulis, tahun_terbit) VALUES (:judul, :penulis, :tahun)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":judul", $judul);
        $stmt->bindParam(":penulis", $penulis);
        $stmt->bindParam(":tahun", $tahun_terbit);
        return $stmt->execute();
    }
}