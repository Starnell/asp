<?php
function filter($str){
    $str=trim($str);
    if (!get_magic_quotes_gpc()){
        $str=addslashes($str);//转义
    }
    //将html转换为实体并返回
    return htmlspecialchars($str);
}

function beforeLogin(){
    if (isset($_SESSION['id'])&&$_SESSION['id']){
        return true;
    }else{
        $str=<<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<script language="JavaScript">
    alert('请先登陆');
    location.href='index.php';
</script>
</html>
EOT;
        return $str;
    }
}