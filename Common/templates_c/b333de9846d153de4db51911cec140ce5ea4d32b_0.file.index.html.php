<?php
/* Smarty version 3.1.30, created on 2017-12-08 21:41:08
  from "D:\WampServer\demo\asp\Html\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a967490b837_51762978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b333de9846d153de4db51911cec140ce5ea4d32b' => 
    array (
      0 => 'D:\\WampServer\\demo\\asp\\Html\\index.html',
      1 => 1512740467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a967490b837_51762978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言本</title>
    <link href="/asp/Style/css/index.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 language="JavaScript" src="/asp/Style/js/index.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="main">
    <div id="header">
    <img src="/asp/Style/img/logo.png" width="150" height="50">
        <div id="login">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['user'] == '') {?>
            <form action="/asp/login.php" method="post" onsubmit="return checkLogin()">
                <input type="text" placeholder="请输入用户名" name="username" id="username">
                <input type="password" placeholder="请输入密码" name="password" id="password">
                <input type="submit" value="登陆">
            </form>
            <?php } else { ?>
            <p id="welcome">欢迎回来，<?php echo $_smarty_tpl->tpl_vars['data']->value['user'];?>
! &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp<a href="logout.php">退出</a></p>
            <?php }?>
        </div>
    </div>
    <h3>共6条留言</h3>
    <div id="msg">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['all'], 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
        <div>
            <p class="style0">用户名：<?php echo $_smarty_tpl->tpl_vars['vo']->value['user'];?>
&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['vo']->value['time'];?>

            <div class="content"><?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['vo']->value['reply'] != null) {?>
            <div style="font-size:14px;color:red;line-height:25px;margin-left: 10px">管理员回复：<?php echo $_smarty_tpl->tpl_vars['vo']->value['reply'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['user'] != '') {?>
            <span style="font-size: 14px;color:#cc0000;margin-left: 10px"><?php if ($_smarty_tpl->tpl_vars['vo']->value['reply'] != null) {?>已回复<?php } else { ?><a href="reply.php?id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">回复</a><?php }?>&nbsp;<a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"  onclick="return confirm('你确定要删除吗？')">删除</a></span>
            <?php }?>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['data']->value['show'];?>

    <div id="add">
        <fieldset>
            <legend>发表留言</legend>
            <form action="/asp/add.php" method="post" onsubmit="return checkAdd()">
                <table border="0" cellpadding="5" cellspacing="0" width="0">
                    <tr>
                        <td width="20%">留言标题</td>
                        <td>
                            <input type="text" name="title" id="title" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">用户名</td>
                        <td>
                            <input type="text" name="user" id="user" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>内容</td>
                        <td>
                            <textarea name="content" id="content" cols="42" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input name="action" value="insert" type="hidden">
                            <input value=" 提 交 " name="submit" class="button" type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <br>
    </div>
</div>
</body>
</html><?php }
}
