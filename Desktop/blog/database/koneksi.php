<?php
 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 
class database {
 
    private $host="localhost";
 
    private $user="root";
 
    private $pswd="";
 
    private $db="pendataan_karyawan";
 
    var $koneksi;
 
    function koneksiMysql()
    {
 
      $this->koneksi=@mysql_connect($this->host, $this->user, $this->pswd);
 
      mysql_select_db($this->db) or die ("Database Tidak Ditemukan");
    }
}
 
?>