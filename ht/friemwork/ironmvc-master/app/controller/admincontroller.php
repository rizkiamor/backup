<?php
session_start();
Class admincontroller extends Ironcontroller{

	public function index(){
		$data["title"] = "Login Admin";
		return view::render("admin/login",$data);
	}

	public function dashboard(){
		$data["title"] = "Dashboard Admin";
		return view::render("admin/dashboard",$data);
	}

	public function kategori($id = 0){
		if(empty($id)){
			$data["title"] = "Kategori";
			$data["kategoris"] = $this->kategori->all();
			return view::render("admin/kategori/kategori",$data);
		}else{
			$data["title"] = "Kategori";
			$data["getone"] = $this->kategori->getone($id);
			return view::render("admin/kategori/kategori.update",$data);
		}
	}
	
	public function foto($id = 0){
		if(empty($id)){
			$data["title"] = "Foto";
			$data["fotos"] = $this->foto->all();
			$data["kategori"] = $this->kategori->all();
			return view::render("admin/foto/foto", $data);
		}else{
			
		}
	}

	public function berita($id = 0){
		if(empty($id)){
			$data["title"] = "Berita";
			$data["berita"] = $this->berita->all();
			return view::render("admin/tutorial/berita", $data);
		}else{
			$data["title"] = "Berita";
			$data["kategori"] = $this->kategori->all();
			$data["berita"] = $this->berita->getone($id);
			return view::render("admin/tutorial/berita.update", $data);
		}
	}
	
	public function users($id = 0){
		if(empty($id)){
			$data["title"] = "Users";
			$data["users"] = $this->user->all();
			return view::render("admin/user/user", $data);
		}else{
			$data["title"] = "Users";
			$data["users"] = $this->user->all();
			$data["user"] = $this->user->getone($id);
			return view::render("admin/user/user.update", $data);
		}
	}

	public function logout(){
		session_destroy();
		header("location:".url("admin"));
	}
	
}