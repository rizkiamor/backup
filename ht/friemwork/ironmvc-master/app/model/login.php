<?php

Class login extends Ironmodel{
  private $_sql;
  
  public function auth(){
  	$username = $_POST["user"];
  	$password = base64_encode(md5($_POST["pass"]));

  	$auth = $this->db()->prepare("SELECT * FROM users WHERE USERNAME = :user AND PASSWORD = :pass ");
    
    $auth->bindParam(":user", $username);
    $auth->bindParam(":pass", $password);
    
    $auth->execute();
    $find = $auth->rowCount() ;
    
    return $find; 
  }

}
