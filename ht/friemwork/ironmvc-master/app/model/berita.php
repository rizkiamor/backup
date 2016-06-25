<?php

Class berita extends Ironmodel{
  private $_sql;
  /* panggil semua data berita */
  public function all(){
    $this->_sql = "SELECT * FROM TUTORIAL ORDER BY IDTUTORIAL DESC";
    return $this->db()->query($this->_sql);
  }

  public function getone($id){
    $this->_sql = "SELECT * FROM TUTORIAL WHERE IDTUTORIAL = '$id'";
    return $this->db()->query($this->_sql);
  }

  public function limit($start,$more){
    $this->_sql = "SELECT * FROM TUTORIAL ORDER BY IDTUTORIAL DESC LIMIT $start,$more";
    return $this->db()->query($this->_sql);
  }

  public function simpandata(){
    $data = [$_POST["judul"],$_POST["desk"],$_FILES["gambar"]["name"],date("Ymd"),$_POST["kategori"]];
    $save = $this->db()->prepare("INSERT INTO TUTORIAL (JUDUL,DESKRIPSI,GAMBAR,TANGGALUPLOAD,IDKATEGORI) VALUES (?, ?, ?, ?, ?)");
    $upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], "public/image/". $_FILES["gambar"]["name"]);
    if ($upload){
      return $save->execute($data);
    }else{
      return $save->execute($data);
    }
  }

  public function simpanperubahan(){
    if(empty($_FILES["gambar"]["name"])){
      $data = [$_POST["judul"],$_POST["desk"],$_POST["kategori"]];
      $save = $this->db()->prepare("UPDATE TUTORIAL SET JUDUL = ?,DESKRIPSI = ?,IDKATEGORI = ?");
    }else{
      $data = [$_POST["judul"],$_POST["desk"],$_FILES["gambar"]["name"],$_POST["kategori"]];
      $save = $this->db()->prepare("UPDATE TUTORIAL SET JUDUL = ?,DESKRIPSI = ?,GAMBAR = ?, IDKATEGORI =?");
      move_uploaded_file($_FILES["gambar"]["tmp_name"], "public/image/". $_FILES["gambar"]["name"]);
    }
      return $save->execute($data);
  }

  public function hapusdata($id){
    $delete = $this->db()->prepare("DELETE FROM tutorial WHERE IDTUTORIAL = ? ");
    return $delete->execute([$id]);
  }

}
