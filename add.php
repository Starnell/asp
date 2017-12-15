<?php
include_once 'config.inc.php';
if (isset($_POST['title'])&&$_POST['title']){
    $title=filter($_POST['title']);
    $user=filter($_POST['user']);
    $content=filter($_POST['content']);
    $time=time();
    $sql='insert into message (title,user,content,time) values (:title,:user,:content,:time)';
    $stmt=$pdo->prepare($sql);
    $data=[
        ':title'=>$title,
        ':user'=>$user,
        ':content'=>$content,
        ':time'=>$time,
    ];
    $stmt->execute($data);
    $rows=$stmt->rowCount();
    if ($rows){
        echo '<script language="JavaScript">alert("留言成功！");location.href="index.php";</script>';
    }else{
        echo '<script language="JavaScript">alert("留言失败，请稍后重试！");location.href="index.php";</script>';
    }
}