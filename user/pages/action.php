<?php
  include "../config.php";

  class DataDB extends dbConfig
  {
    public function __construct() {
      parent::__construct();
    }

    function getData($id){
      $id = $this->kategori($id);
      $getData = $this->koneksi->prepare("SELECT * FROM berita INNER JOIN kategori
        ON berita.kategori_brt = kategori.id_kategori WHERE berita.kategori_brt=:id
        ORDER BY berita.id DESC");
      $getData->bindParam(":id", $id);
      $getData->execute();
      return $getData->fetchAll();
    }

    function createComment($id_berita, $id_user, $komentar) {
      $input = $this->koneksi->prepare("INSERT INTO komentar (id_berita, id_users,
        komentar, commented_at) VALUES (:id_berita, :id_users, :komentar, :commented_at)");
      $input->bindParam(":id_berita", $id_berita);
      $input->bindParam(":id_users", $id_user);
      $input->bindParam(":komentar", strip_tags($komentar));
      $input->bindParam(":commented_at", $this->getDate());
      $input->execute();

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

    function getLatestNews($kategori){
      $kategori = $this->kategori($kategori);
      $getData = $this->koneksi->prepare("SELECT * FROM berita INNER JOIN kategori
        ON berita.kategori_brt = kategori.id_kategori WHERE berita.kategori_brt =:kategori
        ORDER BY berita.id DESC LIMIT 1");
      $getData->bindParam(":kategori", $kategori);
      $getData->execute();
      return $getData->fetch();
    }

    function getSideNews(){
      $getData = $this->koneksi->prepare("SELECT * FROM berita INNER JOIN kategori
        ON berita.kategori_brt = kategori.id_kategori ORDER BY berita.id DESC LIMIT 7");
      $getData->execute();
      return $getData->fetchAll();
    }

    function getComments($id_berita){
      $getData = $this->koneksi->prepare("SELECT * FROM komentar INNER JOIN berita
        ON komentar.id_berita = berita.id INNER JOIN users ON komentar.id_users =
        users.id WHERE komentar.id_berita=:id_berita ORDER BY komentar.id DESC");
      $getData->bindParam(":id_berita", $id_berita);
      $getData->execute();
      return $getData->fetchAll();
    }

    function CommentCounter($id_berita){
      $getData = $this->koneksi->prepare("SELECT count(*) as jumlah FROM komentar
      INNER JOIN berita ON komentar.id_berita = berita.id INNER JOIN users ON
      komentar.id_users = users.id WHERE komentar.id_berita=:id_berita");
      $getData->bindParam(":id_berita", $id_berita);
      $getData->execute();
      return $getData->fetch();
    }

    function search($keyword){
      $keyword = "%".$keyword."%";
      $getData = $this->koneksi->prepare("SELECT * FROM berita WHERE judul_berita
        LIKE :keyword OR isi_berita LIKE :keyword");
      $getData->bindParam(":keyword", $keyword);
      $getData->execute();
      return $getData->fetchAll();
    }

    function kategori($str){
      switch ($str) {
    		case 'politics':
    			$noid="1";
    			break;

    		case 'business':
    			$noid="2";
    			break;

    		case 'technologies':
    			$noid="3";
    			break;

    		case 'health':
    			$noid="4";
    			break;

    		case 'travel':
      		$noid="5";
      		break;

        case 'sports':
      		$noid="6";
      		break;

        case 'otomotive':
      		$noid="7";
      		break;

        case 'foods':
      		$noid="8";
      		break;

        default:
          $noid = "8";
    	}
      return $noid;
    }
  }
?>
