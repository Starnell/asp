function checkReply() {
    if(document.getElementById('reply').value==''){
        alert('请输入内容！');
        return false;
    }
    return true;
}
