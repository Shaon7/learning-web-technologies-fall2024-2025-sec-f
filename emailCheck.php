<?php


    session_start();

    $email = $_REQUEST['email'];
    
    if($email==NULL)
    {
        echo "Email Can not be empty";
    }
    else
    {
        $len = strlen($email);
        $flag = 0;
        for($i = 0;$i<$len;$i++)
        {
            if($email[$i]==' ') echo " Your email can't contain space";
            if($email[$i]=='@') $flag = 1;
        }
        if($flag) echo "Valid user";
        else echo "Invalid User";
    }


?>