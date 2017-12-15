<?php
include_once 'config.inc.php';
include_once 'Common/functions.php';
$isLogin=beforeLogin();
if ($isLogin===true){//检查是否登陆
    if (isset($_GET['id'])&&$_GET['id']){
        $id=filter($_GET['id']);

        //显示
        $sql="select * from message where id=$id";
        $res=$pdo->query($sql);
        $msg=$res->fetchAll(PDO::FETCH_ASSOC);
        $msg=$msg[0];

        //回复
        if (isset($_POST['reply'])&&$_POST['reply']){
            $reply=filter($_POST['reply']);
            $sql='update message set reply=:reply where id=:id';
            $stmt=$pdo->prepare($sql);
            $stmt->execute(array(':id'=>$id,':reply'=>$reply));
            $rows=$stmt->rowCount();
            if ($rows){
                echo '<script language="JavaScript">alert("回复成功！");location.href="index.php";</script>';
            }else{
                echo '<script language="JavaScript">alert("回复失败，请稍后重试！");location.href="index.php";</script>';
            }
        }

        $smarty->assign('msg',$msg);
        $smarty->display('reply.html');
    }
}else{
    echo $isLogin;
}

