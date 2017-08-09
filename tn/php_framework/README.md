# mvc-framework
This is a php-based framework.

## Ŀ¼�ṹ
### Application         mvc�������
     --Controller       ����������������Э��Model��View
  	 --Model            ģ�ͣ����ݿ����������
  	 --View             ��ͼ��չʾ����

### Configs	            �����ļ�
  	 --database.php 	���ݿ�����
  	 --log.php		    д����־����
  	 --redis.php		redis��������
     --route.php        ·������

### Core                ��ܺ����ļ�
  	 --Common           ����������
  	   --Db.php         ���ݿ���
  	   --Func.php       ����������
  	   --function.php   ���ú���
  	   --Pager.php      ��ҳ��
  	   --Re.php         redis������
  	 --Libraries
  	   --APP            mvc�����(����)
  	     --Controller.php
  	     --Model.php
  	   --driver         ������
  	     --log
  	       --file.php   �ļ���־��
  	       --mysql.php  ���ݿ���־��
  	   --conf.php
  	   --log.php        ��־����
  	   --route.php
  	 Mycore.php         ���Ĳ���

### index.php           ����ļ�



## �������

nginx����
server {
        listen       8080;
        server_name  framework.cn;

        root    "/****/mvc-framework";
        index index.php index.html index.htm;


        location ~ ^/(images|js|css|static|upload|front|admin|ssoNoticeMessage.html|synclogin.php|synclogout.php)/  {
			      expires 30d;
		    }
		    if (!-f $request_filename){
			      rewrite ^/(.+)$ /index.php/$1 last;  #����Ҫ����rewrite, ����url�Ϳ���ʡ��index.php��
		    }
        location ~ \.php(.*)$  {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_split_path_info  ^((?U).+\.php)(/?.+)$;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            fastcgi_param  PATH_INFO  $fastcgi_path_info;
            fastcgi_param  PATH_TRANSLATED  $document_root$fastcgi_path_info;
            include        fastcgi_params;
        }
}


���磺framework.cn:8080/admin/admin/register
ʡ��index.php���ṹΪhostname/���������Controller��·��(����ΪadminĿ¼�µ�admin��������admin/admin)/Action
