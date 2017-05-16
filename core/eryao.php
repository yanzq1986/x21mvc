<?php
namespace core;

class eryao{

    public static $classMap = array();
    public $assign ;

    static public function run(){
        \core\lib\log::init();
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $cltrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $cltrlClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.';action:'.$action);
        }else{
            throw new \Exception('找不到控制器：'.$ctrlClass);
        }
    }

    static public function load($class){
        //自动加载类库
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            $file = ERYAO.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }

    public function assign($name,$value){
        $this->assign[$name] = $value;
    }

    public function display($file){
        $file = APP.'/tpl/'.$file;
        if(is_file($file)){
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/tpl');
            $twig = new \Twig_Environment($loader, array(
                'cache' => ERYAO.'/temp/_cache',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate('index.html');
            $template->display($this->assign?$this->assign:'');
        }
    }
}
