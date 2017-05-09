<?php
namespace core\lib;
/**
 * 数据库操着类
 */
 use core\lib\conf;
class model extends \PDO {

    function __construct(){
        $db = conf::all('database');
        try{
            parent::__construct($db['DSN'],$db['USERNAME'],$db['PASSWD']);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }
}
