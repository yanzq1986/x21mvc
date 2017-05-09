<?php
namespace app\ctrl;
/**
 *
 */
class indexCtrl extends \core\eryao {

    public function index(){
        // p('it is index');
        // $model = new \core\lib\model();
        // $sql = "select * from admin";
        // $data = $model->query($sql)->fetchAll();
        // p($data);
        $temp = new \core\lib\model();
        // $temp = \core\lib\conf::get('CTRL','route');
        print_r($temp);
        $data = '这里是数据';
        $this->assign('data',$data);
        $this->display('index/index.html');
    }
}
