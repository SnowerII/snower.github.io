function check()
{
    var name = document.getElementById("username");
    var pwd = document.getElementById("userpwd");
    var email = document.getElementById("useremail")
    if(name.value == "")
    {
        alert("请输入用户信息！");
        name.focus();
        return false;
    }
    if(email.value == "")
    {
        alert("请输入邮箱地址！");
        email.focus();
        return false;
    }
    if(pwd.value == "")
    {
        alert("请输入密码！");
        pwd.focus();
        return false;            
    }
    return true;
}

/*function checkvote()
{
    var vote = document.getElementsByName("company-choose");
    if(vote.value==null)
        {
            alert("please choose a company you wanna vote");
            return false;
        }
        return true;
}
