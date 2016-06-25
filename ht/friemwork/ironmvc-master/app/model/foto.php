<?php

Class foto extends Ironmodel{

	public function all(){
		return $this->db()->query("SELECT * FROM foto ORDER BY IDFOTO DESC");
	}

	public function limit($start, $end){
		return $this->db()->query("SELECT * FROM foto ORDER BY IDFOTO DESC LIMIT $start, $end");
	}

	public function getarray($array){
		$implode = implode(",", $array);
		return $this->db()->query("SELECT * FROM foto WHERE IDFOTO IN(".$implode.")");
	}

	public function getone($id){
		$detail = $this->db()->prepare("SELECT * FROM foto WHERE IDFOTO = ?");
		$detail->execute([$id]);
		 return $detail->fetchAll();
	}

	public function in($id){
		$detail = $this->db()->prepare("SELECT * FROM foto WHERE IDKATEGORI = ?");
		$detail->execute([$id]);
		 return $detail->fetchAll();
	}

	public function simpandata(){
		$data = [$_POST["judul"], $_POST["kategori"], htmlspecialchars($_POST["dec"]), $_POST["fname"], date("Ymd")];
		$save = $this->db()->prepare("INSERT INTO foto (JUDUL,IDKATEGORI,DESKRIPSI,GAMBAR,TANGGALUPLOAD) VALUES (?, ?, ?, ?, ?)");
		return $save->execute($data);
	}
}