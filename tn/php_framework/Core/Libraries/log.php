<?php
namespace Core\Libraries;

class log
{
    static $class;
    /**
     * 1.ȷ����־�洢��ʽ
     */

    static public function init()
    {
        //ȷ���洢��ʽ
        $driver = conf::get('DRIVER', 'log');
        $class = '\Core\Libraries\driver\log\\'.$driver;
        self::$class = new $class;
        //return self::$class;
    }

    static public function log($message)
    {
        self::$class->log($message);
    }
}