<?php
session_start();
Class beritacontroller extends Ironcontroller{

	public function add(){
		$data["kategori"] = $this->kategori->all();
		return view::render("admin/tutorial/berita.add", $data);
	}

	public function update($id){
		if($this->berita->simpanperubahan($id)){
			header("location:".url("admin/berita"));
		}else{
			$data["error"] = "Gagal Simpan Data";
			return view::render("admin/tutorial/berita.update", $data);
		}
	}

	public function save(){
		if($this->berita->simpandata()){
			header("location:".url("admin/berita"));
		}else{
			$data["error"] = "Gagal Simpan Data";
			return view::render("admin/tutorial/berita.add", $data);
		}
	}

	public function confirm($id){
        $data["beritaid"] = $id;
        return view::render("admin/tutorial/berita.confirm", $data);
    }

    public function delete($id){
    	if($this->berita->hapusdata($id)){
    		header("location:".url("admin/berita"));
    	}else{
    		$data["error"] = "Gagal Hapus Data";
    		$data["berita"] = $this->berita->all();
    		return view::render("admin/tutorial/berita", $data);
    	}
    }

}