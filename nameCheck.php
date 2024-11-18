<?php


    session_start();

    $username = $_REQUEST['username'];
    $fname = "";
    $lname = "";

    $len = strlen($username);
    for($i = 0;$i<$len;$i++)
    {
        if($username[$i]==' ') break;
        else $fname = $fname.$username[$i];
    }
    $i+=2;
    while($i<$len)
    {
        $lname = $lname.$username[$i];
        $i++;
    }
    if($username==NULL)
    {
        echo "Cannot be empty";
    }
    else if($fname==NULL || $lname==NULL)
    {
        echo "Contain at least two words";
    }
    else if(ctype_digit($fname[0]))
    {
       echo "Your name must start with a letter";
    }
    else
    {
        $flag = 0;
        for($i = 0;$i<$len;$i++)
        {
            if(ctype_alpha($username[$i]) || $username[$i]==' ' || $username[$i]=='-' ) continue;
            else
            {
                break;
                $flag = 1;
            }
        }
        if($flag)
        echo "Name can contain only letters and dash";
        else echo "Valid User"; 
    }


    
    
?>