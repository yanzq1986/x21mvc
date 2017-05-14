<?php
namespace core\lib\drive\log;
/**
 *文本日志
 */
use core\lib\conf;
class file {
    public $path;
    public function __construct(){
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }
    public function log($message,$file = 'log'){
        if(!is_dir($this->path)){
            mkdir($this->path,'0777',true);
        }
        file_put_contents($this->path.$file.date('Ymd').'.log',date('Y-m-d H:i:s').':'.json_encode($message).PHP_EOL,FILE_APPEND);
    }
}
