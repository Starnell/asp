<?php
include_once 'config.inc.php';
$isLogin=beforeLogin();
if ($isLogin===true){//检查登陆状况
    if (isset($_GET['id'])&&$_GET['id']){
        $id=filter($_GET['id']);
        $sql='delete from message where id=:id';
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(':id'=>$id));
        $rows=$stmt->rowCount();
        if ($rows){
            echo '<script language="JavaScript">alert("删除成功！");location.href="index.php";</script>';
        }else{
            echo '<script language="JavaScript">alert("删除失败，请稍后重试！");location.href="index.php";</script>';
        }
    }
}else{
    echo $isLogin;
}
