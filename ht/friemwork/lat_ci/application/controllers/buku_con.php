<?php
class Buku_con extends Controller {

public function Buku_con()
{
parent::__construct();
$this->load->model('buku_model');
}

public function getBuku () {
$data['title'] = 'menampilkan isi buku';
$data['detail'] = $this->buku_model->getBuku();
$this->load->view('buku_view', $data);
}

}
?>
