<?php
session_start();
Class logincontroller extends Ironcontroller{
    
    public function cek(){
        global $siteUrl;
        if($this->login->auth() > 0){
             $_SESSION['KCFINDER']=array();
             $_SESSION['KCFINDER']['disabled'] = false;
             $_SESSION['KCFINDER']['uploadURL'] = $siteUrl."/public/image";
             $_SESSION['KCFINDER']['uploadDir'] = "";
            header("location:".url("admin/dashboard"));
        }else{
            $data["title"] = "Error Login";
            $data["error"] = $this->error();
            return view::render("admin/login",$data);
        }
    }
    
    public function error(){
        return "Username & Password Error";
    }
    
}