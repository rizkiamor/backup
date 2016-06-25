<?php

/* iron data model file*/

Class dataModel extends Ironmodel{

  private static $table = "";
  private $primaryKey ="";
  private $_sql;

  public function get($tableName){
    self::$table = (!empty($tableName)) ? $tableName : self::$table;
    return new self();
  }

  public function all(){
    $this->_sql = "SELECT * FROM ". self::$table;
    return $this->db()->query($this->_sql);
  }

  public function findById($id){
    $pK = (!empty($this->primaryKey)) ? $this->primaryKey : "id";
    $this->_sql = "SELECT * FROM ". self::$table ." WHERE ". $pk ."='$id'";
    return $this->db()->query($this->_sql);
  }

  public function findBy($params = []){
    $a = [];
    foreach ($params as $key => $value) {
      # code...
      $a[] = $key ."='". $value ."'";
    }
    $where = implode("AND ",$a);
    $this->_sql =sprintf("SELECT * FROM ". self::$table ." WHERE `%s`", $where);
    return $this->db()->query($this->_sql);
  }

  public function save(){

  }

  public function update(){

  }

  public function delete(){

  }

}
