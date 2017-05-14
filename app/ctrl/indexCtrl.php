<?php
namespace app\ctrl;
use core\lib\model;
/**
 *
 */
class indexCtrl extends \core\eryao {

    public function index(){
        $model = new model();
        dump($model);
        $data = $model->select('admin','*');
        dump($data);
    }
}
