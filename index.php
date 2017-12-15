<?php
include_once 'config.inc.php';
include_once 'Common/page.class.php';
$everyNum=3;//每页显示的页数
$subPages=5;//每次显示的页数

//登陆状况
$user='';
if (isset($_SESSION['username'])&&$_SESSION['username']){//如果已经登陆了
    $user=$_SESSION['username'];
}
$data['user']=$user;

//页码部分
$current=1;
if (isset($_GET['page'])&&$_GET['page']){
    $current=filter($_GET['page']);
}
$res=$pdo->query('select count(*) as count from message');
$sum=$res->fetchAll(PDO::FETCH_ASSOC);
$sum=intval($sum[0]['count']);
$page=new Page($everyNum,$sum,$current,$subPages,'/asp/index.php');
$data['show']=$page->show();

//留言部分
$start=($current-1)*$everyNum;
$res=$pdo->query("select * from message order by time desc limit $start,$everyNum");
$all=$res->fetchAll(PDO::FETCH_ASSOC);
foreach ($all as &$k){
    $k['time']=date('Y-m-d',$k['time']);
}
unset($k);
$data['all']=$all;
$data['check']=null;

$smarty->assign('data',$data);
$smarty->display('index.html');