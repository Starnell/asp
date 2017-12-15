<?php
include_once 'config.inc.php';
if (isset($_POST['username'])){
    $username=filter($_POST['username']);
    $password=filter($_POST['password']);
    $res=$pdo->query('select * from user where id=1');
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    if ($username==$data[0]['username']&&md5($password)==$data[0]['password']){
        $_SESSION['id']=$data[0]['id'];
        $_SESSION['username']=$data[0]['username'];
        echo "<script language='JavaScript'>alert('登陆成功！');
                 location.href='index.php';
              </script>";
    }else{
        echo "<script language='JavaScript'>alert('用户名或者密码错误！');
                 location.href='index.php';
              </script>";
    }
}