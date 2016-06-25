<?php

Class kategoricontroller extends Ironcontroller{
    
    public function save(){
       if($this->kategori->simpandata()){
            header("location:".url("admin/kategori"));
       }else{
           
       }
    }
    
    public function update(){
        $old = $_POST["tmp_name"];
        $new = $_POST["nama"];
        $id  = $_POST["id"];
        $data["getone"] = $this->kategori->getone($id);
        $data["error"] = "Tidak Ada Perubahan";
        if($new == $old){
            return view::render("admin/kategori/kategori.update", $data);
        }else{
            if($this->kategori->simpanperubahan()){
                header("location:".url("admin/kategori"));
            }else{
                return view::render("admin/kategori/kategori.update", $data);
            }
        }
    }
    
    public function confirm($id){
        $data["kategoriid"] = $id;
        return view::render("admin/kategori/kategori.confirm", $data);
    }

    public function delete($id){
        if($this->kategori->hapusdata($id)){
             header("location:".url("admin/kategori"));
        }else{
             $data["error"] = "Gagal Hapus";
             return view::render("admin/kategori/kategori", $data);
        }
    }
    
}