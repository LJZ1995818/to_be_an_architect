<?php
namespace Core\Libraries;
use Core\Libraries\conf;
class route
{
    public $controller;
    public $action;
    public function __construct()
    {
        //xxx.com/index/index=>xxx.com/index.php/index/index
        /**
         * 1.����index.php
         * 2.��ȡURL�Ĳ�������
         * 3.���ض�Ӧ����������
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            //  /index/index
            $path = explode('?', $_SERVER['REQUEST_URI']);
            $path = is_array($path) ? $path[0] : $path;
            $arr = explode('/', trim($path, '/'));
            $i = 0;
            if(isset($arr[$i])){
                if($arr[$i] == 'admin'){
                    if(isset($arr[$i+1])){
                        $this->controller = 'admin\\' . ucfirst($arr[++$i]);
                    }else{
                        $this->controller = 'admin\\' . ucfirst(conf::get('Controller', 'route'));
                    }
                }else{
                    $this->controller = ucfirst($arr[$i]);
                }
                $i++;
            }
            if(isset($arr[$i])){
                $this->action = $arr[$i];
            }else{
                $this->action = conf::get('Action', 'route');
            }
        }else {
            $this->controller = ucfirst(conf::get('Controller', 'route'));
            $this->action = conf::get('Action', 'route');
        }
    }
}
