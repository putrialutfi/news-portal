<?php
  class dbConfig {
    public $koneksi;
    public function __construct() {
      if(!isset($this->koneksi)) {
        $this->koneksi = new PDO('mysql:host=localhost;dbname=db_news',"root","");
        $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$this->koneksi) {
          print "Connection Failed!" . $e->getMessage() . "<br>";
          die();
        }
      }
      return $this->koneksi;
    }

    function md5Conv($str){
  		$str = md5(md5($str));
  		return $str;
  	}

    function getDate() {
      date_default_timezone_set('Asia/Jakarta');
      $getDate = date('Y-m-d H:i:s');
      return $getDate;
    }

  }
?>
