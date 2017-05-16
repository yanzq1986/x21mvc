<?php
namespace app\model;
use core\lib\model;
/**
 *
 */
class adminModel extends model {
    public $table = 'admin' ;
    //查所以
    public function lists() {
        $ret = $this->select($this->table,'*');
        return $ret ;
    }
    //查单条
    public function getOne($id){
        $ret = $this->select($this->table,'*',array(
            'id' => $id
        ));
        return $ret ;
    }
    //更新单条
    public function setOne($id,$data){
        $ret = $this->update($this->table,$data,array(
            'id' => $id
        ));
        return $ret ;
    }
    //删除单条
    public function delOne($id){
        $ret = $this->delete($this->table,array(
            'id' => $id
        ));
        return $ret ;
    }
}
