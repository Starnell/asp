### 一、数据库asp
```php
//table user
class user{
    public $id;       //用户id(int)   
    public $username; //用户名(string)       使用admin
    public $password; //密码md5加密(string)  使用admin
}
//table message
class message{
    public $id;     //留言id(int)
    public $title;  //留言标题(string)
    public $content;//留言内容(string)
    public $user;   //留言用户(string)
    public $reply;  //回复内容(string)
    public $time;   //留言时间(int)
}
```

### 二、配置文件 /asp/config.inc.php  
1、数据库配置  
2、模板引擎配置
