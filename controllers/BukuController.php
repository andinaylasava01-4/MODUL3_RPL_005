<?php
require_once "models/BukuModel.php";

class BukuController {
    private $model;

    public function __construct() {
        $this->model = new BukuModel();
    }

    public function index() {
        $buku_list = $this->model->getAllBuku();
        require_once "views/buku_view.php";
    }

    public function tambah($judul, $penulis, $tahun) {
        if (!empty($judul) && !empty($penulis)) {
            $this->model->createBuku($judul, $penulis, $tahun);
        }
        header("Location: index.php");
    }

    public function ubah($id, $judul, $penulis, $tahun) {
        $this->model->updateBuku($id, $judul, $penulis, $tahun);
        header("Location: index.php");
    }

    public function hapus($id) {
        $this->model->deleteBuku($id);
        header("Location: index.php");
    }
}
?>