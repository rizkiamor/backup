<?php

class Barang extends CI_Controller{

function Index(){
  $this->load->model('model_barang');
  $barang = $this->model_barang->list_barang();
  print_r($barang);
  die;
  $judul="Data Barang";
  $data['judul'] = $judul;
  $data['barang'] = $this->model_barang->list_barang();
  $this->load->view('list_barang',$data);
}
function edit(){
  echo $this->uri->segment(2);
  //echo "edit";
}

}

 ?>
