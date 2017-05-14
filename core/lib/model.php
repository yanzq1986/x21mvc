<?php
namespace core\lib;
/**
 * 数据库操着类
 */
use core\lib\conf;
class model extends \Medoo {
    public function __construct(){
        $option = conf::all('database');
        parent::__construct($option);
    }
}
