/*          *\
   login.js
   20160805
     김찬형
\*          */

function login_chk()
{ // Check form
    var f = document.loginForm;

    if(f.m_id.value == "")
    {
        alert(" Check ID ");
        return false;
    }
    
    if(f.m_pass.value == "")
    {
        alert(" Check Password ");
        return false;
    }
    f.submit(); 
    // succeed the form and submit
}

function join_chk()
{ // Check form
    var f = document.registForm;

    if(f.m_id.value == "")
    {
        alert(" Check ID ");
        return false;
    }

    if(f.m_name.value == "")
    {
        alert(" Check NickName ");
        return false;
    }

    if(f.m_pass.value == "")
    {
        alert(" Check Password ");
        return false;
    }

    if(f.m_pass.value != f.m_pass2.value)
    {
        alert(" Check Password2 ");
        return false;
    }
    f.submit();
}

