<?php
require("../../../database/koneksi.php");
 
class absensi{
 
      private $id,$nama,$date,$time,$location;

      public function getId()
      {
        return $this->id;
      }
 
      public function getNama()
       {
         return $this->nama;
       }
      public function setNama($nama)
       {
         $this->nama=$nama;
       }

      public function getDate()
       {
         return $this->date;
       }
      public function setDate($date)
       {
         $this->date=$date;
       }

      public function getTime()
       {
         return $this->time;
       }
      public function setTime($time)
       {
         $this->time=$time;
       }

      public function getLocation()
       {
         return $this->location;
       }
      public function setLocation($location)
       {
         $this->location=$location;
       }
                   
       

  public function getSqlAbsensi()
  {
    $sql="SELECT * FROM absensi order by id desc";
    $koneksi=new database();
    $koneksi->koneksiMysql();
    $query=mysql_query($sql) or die("koneksi gagal");
    return $query;
  }

  public function getAbsensiById($id)
  {
    $sql="SELECT * FROM absensi where id = ".$id;
    $koneksi=new database();
    $koneksi->koneksiMysql();
    $query=mysql_query($sql) or die("koneksi gagal");
    $row = mysql_fetch_array($query);

    return $row;
  }

  public function getListDataAbsensi()
  {
    $query = $this->getSqlAbsensi();
    $data = array();

    while ($row = mysql_fetch_array($query))
    {
      
      $data[] = array(
        'id' => $row['id'],
        'nama' => $row['nama'],
        'date' => $row['date'],
        'time' => $row['time'],
        'location' => $row['location'],
      );
    }

    return $data;
  }

  public function insert()
  {

    $insert=false;
    $sql="INSERT into absensi values('','".$this->getNama()."', '".$this->getDate()."', '".$this->getTime()."', '".$this->getLocation()."')";
    $koneksi=new database();
    $koneksi->koneksiMysql();
    $query=mysql_query($sql) or die("Koneksi Gagal coy");
    
    if ($query) {
     $insert=true;
    }

    return $insert;
  }

  public function update($id)
  {
    $update=false;
    $sql="UPDATE karyawan set 
      nama = '".$this->getNama()."', 
      date = '".$this->getDate()."',
      time = '".$this->getTime."',
      location = '".$this->getLocation()."',
      WHERE id = ".$id."
    ";

    $koneksi=new database();
    $koneksi->koneksiMysql();
    $query=mysql_query($sql) or die("Koneksi Gagal");
    if ($query) {
     $update=true;
    }

    return $update;
  }

  public function delete($id)
  {
    $delete=false;
    $sql="DELETE FROM absensi WHERE id = ".$id;

    $koneksi=new database();
    $koneksi->koneksiMysql();
    $query=mysql_query($sql) or die("Koneksi Gagal");
    if ($query) {
     $delete=true;
    }

    return $delete;
  }
 
}
?>