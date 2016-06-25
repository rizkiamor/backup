<?php

Class user extends Ironmodel{

	public function all(){
		return $this->db()->query("SELECT * FROM users");
	}

	public function getone($id){
		return $this->db()->query("SELECT * FROM users WHERE IDUSERS = '$id'");
	}

	public function simpandata(){
		$data = [$_POST["username"],base64_encode(md5($_POST["pass"]))];
		$save = $this->db()->prepare("INSERT INTO users (USERNAME,PASSWORD) VALUES (?, ?)");
		return $save->execute($data);
	}

	public function simpanperubahan($id){
		if(empty($_POST["pass"])){
			$data = [$_POST["username"]];
			$save = $this->db()->prepare("UPDATE users SET USERNAME =?");
		}else{
			$data = [$_POST["username"],base64_encode(md5($_POST["pass"]))];
			$save = $this->db()->prepare("UPDATE users SET USERNAME =? ,PASSWORD = ? ");
		}
		return $save->execute($data);
	}

	public function hapusdata($id){
		$delete = $this->db()->prepare("DELETE FROM users WHERE IDUSERS = ?");
		return $delete->execute([$id]);
	}
}