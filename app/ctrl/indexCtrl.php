<?php
namespace app\ctrl;
use core\lib\model;
/**
 *
 */
class indexCtrl extends \core\eryao {

    public function index(){
        $data = 'this is indexCtrl in indexAction';
        $this->assign('data',$data);
        $this->display('index.html');
    }
}
