<?php
namespace Core\Libraries\driver\log;

use Core\Libraries\conf;

class file
{
    public $path;//��־�洢λ��
    public function __construct()
    {
        $conf = conf::get('OPTION', 'log');
        $this->path = $conf['PATH'];
    }
    public function log($message,$file = 'log')
    {
        /**
         * 1.ȷ���ļ��洢λ���Ƿ����
         * �����ڣ��½�Ŀ¼
         * 2.д����־
         */
        $path = $this->path.date('YmdH').'/';
        if(!is_dir($path)){
            mkdir($path, '0777', true);
        }
        $message = date('Y-m-d H:i:s') . ' ' . json_encode($message);
        file_put_contents($path . $file . '.php', $message . PHP_EOL, FILE_APPEND);
    }
}