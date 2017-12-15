<?php
session_start();
include_once 'Common/functions.php';
date_default_timezone_set('Asia/Shanghai');
<<<<<<< HEAD
=======
header("Content-type:text/html;charset=utf8");
>>>>>>> newbranch
//数据库配置
$configs=array(
    'db_host'=>'localhost',
    'db_name'=>'asp',
    'db_user'=>'root',
    'db_pwd'=>'',
    'db_charset'=>'utf8',
);

//使用PDO连接数据库
try{
    $dsn='mysql:dbname='.$configs['db_name'].';host='.$configs['db_host'];
    $attr=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,//内部抛出异常，中断页面
    ];
    $pdo=new PDO($dsn,$configs['db_user'],$configs['db_pwd'],$attr);
    $pdo->query('set names '.$configs['db_charset']);
}catch (PDOException $e){
    echo $e->getMessage();
}

//模板引擎配置
include_once 'Common/Smarty/Smarty.class.php';
$smarty=new Smarty();
$smarty->config_dir='Common/Smarty_Configs/';
$smarty->caching=false;//是否使用缓存，项目在调试期间，不建议启用缓存
$smarty->template_dir='Html/';//设置模板目录
$smarty->compile_dir='Common/templates_c/';//设置编译目录
$smarty->cache_dir='Common/Cache/';//缓存文件夹
$smarty->left_delimiter='{{';
$smarty->right_delimiter='}}';