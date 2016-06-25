<?php
session_start();
Class usercontroller extends Ironcontroller{

	public function save(){
		if($this->user->simpandata()){
			header("location:".url("admin/users"));
		}else{
			$data["error"] = "Gagal Hapus";
			$data["users"] = $this->user->all();
			return view::render("admin/user/user", $data);
		}
	}

	public function update($id){
		if($this->user->hsimpanperubahan($id)){
			header("location:".url("admin/users"));
		}else{
			$data["error"] = "Gagal Hapus";
			$data["users"] = $this->user->all();
			return view::render("admin/user/user", $data);
		}
	}

	public function confirm($id){
        $data["userid"] = $id;
        return view::render("admin/user/user.confirm", $data);
    }

	public function delete($id){
		if($this->user->hapusdata($id)){
			header("location:".url("admin/users"));
		}else{
			$data["error"] = "Gagal Hapus";
			$data["users"] = $this->user->all();
			return view::render("admin/user/user", $data);
		}
	}
}