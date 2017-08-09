<?php
namespace Core\Libraries;
class conf
{
    static public $conf =  array();

    /**
     * @param $name
     * @param $file
     * @return mixed
     * @throws \Exception
     * @author Admin
     */
    static public function get($name, $file)
    {
        /*
         * 1.�ж������ļ��Ƿ����
         * 2.�ж������Ƿ����
         * 3.��������
         */
        if(isset(self::$conf[$file])){
            if(isset(self::$conf[$file][$name])){
                return self::$conf[$file][$name];
            }else{
                throw new \Exception('û�����������'.$name);
            }
        }else{
            $path = CONFPATH.'/'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                if(isset($conf[$name])){
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('û�����������'.$name);
                }
            }else{
                throw new \Exception('�Ҳ��������ļ�'.$file);
            }
        }

    }

    static public function getAll($file)
    {
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else{
            $path = CONFPATH.'/'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                self::$conf[$file] = $conf;
                return $conf;
            }else{
                throw new \Exception('�Ҳ��������ļ�'.$file);
            }
        }
    }
}