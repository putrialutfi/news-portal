<?php
  include "config.php";

  class DataDB extends dbConfig
  {
    public function __construct() {
      parent::__construct();
    }

    function getKategori() {
      $getData = $this->koneksi->prepare("SELECT * FROM kategori");
      $getData->execute();
      return $getData->fetchAll();
    }

    function getData(){
      $getData = $this->koneksi->prepare("SELECT * FROM berita INNER JOIN kategori
        ON berita.kategori_brt = kategori.id_kategori ORDER BY berita.id DESC");
      $getData->execute();
      return $getData->fetchAll();
    }

    function createData($judul_berita, $isi_berita, $kategori, $gambar, $tmp, $gmbr_name, $path_name) {
      $input = $this->koneksi->prepare("INSERT INTO berita (judul_berita, isi_berita,
        kategori_brt, gambar, created_at) VALUES (:judul_berita, :isi_berita, :kategori_brt,
        :gambar, :created_at)");
      $input->bindParam(":judul_berita", strip_tags($judul_berita));
      $input->bindParam(":isi_berita", strip_tags($isi_berita));
      $input->bindParam(":kategori_brt", strip_tags($kategori));
      $input->bindParam(":gambar", $gmbr_name);
      $input->bindParam(":created_at", $this->getDate());
      $input->execute();

      move_uploaded_file($tmp, $path_name);

      if($input) {
        return "sukses";
      }
      else {
        return "gagal";
      }
    }

    function getDataDetail($id){
      $getData = $this->koneksi->prepare("SELECT * FROM berita INNER JOIN kategori ON berita.kategori_brt = kategori.id_kategori WHERE berita.id=:id");
      $getData->bindParam(":id", $id);
      $getData->execute();
      return $getData->fetch();
    }

    function updateData($judul_berita, $isi_berita, $kategori, $gambar, $tmp, $gmbr_name, $path_name, $id) {
      $data = $this->getDataDetail($id);
      if(empty($gambar))
            $gmbr_name = $data['gambar'];

      $update = $this->koneksi->prepare("UPDATE berita SET judul_berita=:judul_berita,
        isi_berita=:isi_berita, kategori_brt=:kategori_brt, gambar=:gambar WHERE id=:id");
      $update->bindParam(":judul_berita", $judul_berita);
      $update->bindParam(":isi_berita", $isi_berita);
      $update->bindParam(":kategori_brt", $kategori);
      $update->bindParam(":gambar", $gmbr_name);
      $update->bindParam(":id", $id);
      $update->execute();

      move_uploaded_file($tmp, $path_name);

      if($update) {
        return "sukses";
      }
      else {
        return "gagal";
      }
    }

    function deleteData($id){
      $delete = $this->koneksi->prepare("DELETE FROM berita WHERE id=:id");
      $delete->bindParam(":id", $id);
      $delete->execute();

      if($delete) {
        return "sukses";
      }
      else {
        return "gagal";
      }
    }
  }
?>
