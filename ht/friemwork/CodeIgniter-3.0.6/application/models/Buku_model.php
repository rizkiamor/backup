<?php
class Buku_model extends Model {
function Buku_model()
{
parent::Model();
}
db->select('*');
$this->db->from('tb_buku');
$this->db->order_by('id_buku','DESC');
$data = $this->db->get('');
return $data;
}
}
?>
