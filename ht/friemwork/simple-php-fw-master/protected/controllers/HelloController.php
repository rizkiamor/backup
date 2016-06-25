<?php
class HelloController extends DController
{
    public function actionIndex()
    {
        return $this->render('index',['name'=>'World']);
    }

    public function actionTampil(){
    $sql = 'select * from siswa';
    $users = Dee::$app->db->queryOne($sql);
    return $this->render('tampil',['users' => $users]);
}

public function actionShow(){
  $nama = array('aku','kamu','dia');
  return $this->render('show',['nama' => $nama]);
}

}
