<?php
class Model_barang extends CI_Model
{

  function list_barang(){
    //$barang = array('sepatu','jaket','celana');
    $barang = $this->db->get('barang');
    return $barang;
  }
}



 ?>
