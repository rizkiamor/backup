<?php

Class welcomecontroller extends Ironcontroller{

  public function index(){
    $data["title"] = "Photography";
    $data["foto"] = $this->foto->limit(0,3);
    $data["tutor"] = $this->berita->limit(0,3);
    return view::render("welcome",$data);
  }

  public function profil(){
    $data["title"] = "Profil Photography";
    return view::render("profil",$data);
  }

  public function tutor($id = 0){
    if($id == 0){
      $data["title"] = "Profil Photography";
      $data["tutor"] = $this->berita->all();
      return view::render("tutor",$data);
    }else{
      $data["title"] = "Profil Photography";
      $data["tutor"] = $this->berita->getone($id);
      return view::render("tutordetail",$data);
    }
  }

  public function category($id = 0){
    if($id == 0){
      return "No Page On Here";
    }else{
       $data["title"] = "Kategori Photography";
       $data["kategoris"] = $this->kategori->all();
       $data["fotoin"] = $this->foto->in($id);

       $data["catname"] = $this->kategori->getname($id);
      return view::render("kategori",$data);
    }
  }

  public function foto($id = 0){
    if($id == 0){
       $data["title"] = "Foto Photography";
       $data["foto"] = $this->foto->all();
       $data["kategoris"] = $this->kategori->all();
       return view::render("foto",$data);
    }else{
       $data["title"] = "Foto Detail Photography";
       $data["foto"] = $this->foto->getone($id);
       $data["kategoris"] = $this->kategori->all();
       $data["catname"] = $this->kategori->getname($id);

       /*cat array*/
       $cat = $this->foto->all();
       $n = $m = array();
       foreach ($cat as $cate) {
         $n[] = $cate["IDFOTO"];
       }
       /*suffle*/
       shuffle($n);

       if( count($n) > 3 ){
          $m = [$n[0],$n[1],$n[2]];
       }

       $data["other"] = $this->foto->getarray($m);
       $data["id"] = $id;
       return view::render("fotodetail",$data);
    }
  }

  public function contact(){
     $data["title"] = "Contact Photography";
    return view::render("contact",$data);
  }

}
