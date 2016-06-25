<?php

Class kategori extends Ironmodel{
  private $_sql;

  public function all(){
    $this->_sql = "SELECT * FROM kategori";
    return $this->db()->query($this->_sql);
  }
  
  public function getone($id){
    $getone = $this->db()->prepare("SELECT * FROM kategori WHERE IDKATEGORI= ? ");
    $getone->execute([$id]);
    
    return $getone->fetchAll();
  }

  public function getname($id){
    $name = "";
    $getone = $this->db()->prepare("SELECT * FROM kategori WHERE IDKATEGORI= ? ");
    $getone->execute([$id]);
    $for = $getone->fetchAll();
    foreach ($for as $names) {
      $name = $names["NAMAKATEGORI"];
    }
    return $name;
  }
  
  public function simpandata(){
     $nama = $_POST["nama"];
        
     $save = $this->db()->prepare("INSERT INTO kategori (NAMAKATEGORI) VALUES (?)");
     return $save->execute([$nama]);
  }
  
  public function simpanperubahan(){
     $nama = $_POST["nama"];
        
     $save = $this->db()->prepare("UPDATE kategori SET NAMAKATEGORI = ? ");
     return $save->execute([$nama]);
  }

  public function hapusdata($id){
    $delete = $this->db()->prepare("DELETE FROM kategori WHERE IDKATEGORI = ? ");
    return $delete->execute([$id]);
  }

}

