<?php

Class fotocontroller extends Ironcontroller{

	public function save(){
		if($this->foto->simpandata()){
			header("location:".url('admin/foto'));
		}else{
			$data["title"] = "Foto";
			$data["error"] = "Gagal Simpan Data";
			$data["fotos"] = $this->foto->all();
			$data["kategori"] = $this->kategori->all();
			return view::render("admin/foto/foto", $data);
		}
	}

	public function up(){
		return move_uploaded_file($_FILES["image"]["tmp_name"],"public/image/".$_FILES["image"]["name"]);
	}
}