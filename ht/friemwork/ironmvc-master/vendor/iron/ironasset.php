<?php

/* asset file */

Class asset{

  public static function get($assets = [], $type = NULL){
    $newasset = new asset;
    switch ($type) {
      case 'js':
        echo $newasset->getJsfile($assets);
        break;

      default:
        echo $newasset->getCssfile($assets);
        break;
    }
  }

  public function getCssfile($files = [], $dir = NULL){
    global $asset, $siteUrl;
    foreach ($files as $file) {
      if($dir == NULL){
        $inc = file_exists($asset . "/css/" . $file .".css") ?  $siteUrl. "/". $asset . "/css/" . $file .".css" : "file tidak ditemukan";
      }else{
        $inc = file_exists($asset . "/" . $dir . "/" . $file .".css") ?  $siteUrl. "/". $asset . "/". $dir ."/" . $file .".css" : "file tidak ditemukan";
      }
      echo "<link rel ='stylesheet' href='". $inc ."' type='text/css' />";
    }
  }

  public function getJsfile($files = [], $dir = NULL){
    global $asset,$siteUrl;
    foreach ($files as $file) {
      if($dir == NULL){
        $inc = file_exists($asset . "/js/" . $file .".js") ? $siteUrl. "/" .$asset . "/js/" . $file .".js" : "file tidak ditemukan";
      }else{
        $inc = file_exists($asset . "/" . $dir . "/" . $file .".js") ? $siteUrl. "/" .$asset . "/" . $dir ."/". $file .".js" : "file tidak ditemukan";
      }
      echo "<script src = '". $inc ."' type='text/javascript' ></script>";
    }
  }

  public static function getFile($name = [], $dir, $type){
    $asset = new asset;
    if($type == "css"){
      $asset->getCssfile($name, $dir);
    }else{
      $asset->getJsfile($name, $dir);
    }
  }

  public static function getImage($imageName){
    global $asset,$siteUrl;
    return $siteUrl ."/". $asset ."/image/". $imageName;
  }

  public static function dateIn($d){
    $bulan = ["","Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "November", "Desember"];
    $split = explode("-", $d);
    $month = $split[1] < 10 ? str_replace("0", "", $split[1]) : $split[1];
    return $split[2]." ".$bulan[$month]." ".$split[0];
  }

}
