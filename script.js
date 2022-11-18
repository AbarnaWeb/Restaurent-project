function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if(username=='abar'&&password=='1234')
    {
        alert('login succesfully');
        return true;
    }
    else
    {
        alert('login failed');
        return false;  
    }

}