function checkLogin() {
    if(document.getElementById('username').value==''){
        alert('请输入用户名！');
        return false;
    }
    if(document.getElementById('password').value==''){
        alert('请输入密码！');
        return false;
    }
    return true;
}
function checkAdd() {
    if(document.getElementById('title').value==''){
        alert('请输入标题！');
        return false;
    }
    if(document.getElementById('user').value==''){
        alert('请输入用户名！');
        return false;
    }
    if(document.getElementById('content').value==''){
        alert('请输入内容！');
        return false;
    }
    return true;
}
