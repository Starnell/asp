<?php
/* Smarty version 3.1.30, created on 2017-12-09 16:39:42
  from "D:\WampServer\demo\asp\Html\reply.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2ba14e90efe2_56910862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0391de62bd80a389fd4f468f00b740d98b117de2' => 
    array (
      0 => 'D:\\WampServer\\demo\\asp\\Html\\reply.html',
      1 => 1512808752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2ba14e90efe2_56910862 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言本</title>
    <link href="/asp/Style/css/index.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 language="JavaScript" src="/asp/Style/js/reply.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="main">
    <div id="header">
        <img src="/asp/Style/img/logo.png" width="150" height="50">
    </div>
    <div id="msg">
        <fieldset>
            <legend>回复留言</legend>
            <form action="" method="post" onsubmit="return checkReply()">
                <table border="0" cellpadding="5" cellspacing="0" width="0">
                    <tr>
                        <td width="20%">留言标题</td>
                        <td>
                            <input type="text" name="title" id="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['msg']->value['title'];?>
" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">用户名</td>
                        <td>
                            <input type="text" name="user" id="user" size="30" value="<?php echo $_smarty_tpl->tpl_vars['msg']->value['user'];?>
" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>内容</td>
                        <td>
                            <textarea name="content" id="content" cols="42" rows="5" readonly><?php echo $_smarty_tpl->tpl_vars['msg']->value['content'];?>
</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>回复内容</td>
                        <td>
                            <textarea name="reply" id="reply" cols="42" rows="5"></textarea>
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
