<?php
/**
* 入口文件
* 1.定义常量
* 2.加截函数库
* 3.启动框架
*/
define('ERYAO',realpath('./')); //定义网站根目录
define('CORE',ERYAO.'/core');  //定义框架目录
define('APP',ERYAO.'/app');    //定义项目目录
define('MODULE','app');
define('DEBUG',true);          //开启调试

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错了';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}
dump($_SERVER);
include CORE.'/common/function.php';
include CORE.'/eryao.php';
spl_autoload_register('\core\eryao::load');
\core\eryao::run();
