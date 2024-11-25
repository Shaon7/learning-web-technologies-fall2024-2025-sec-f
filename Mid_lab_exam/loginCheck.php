<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

        if($username==null || $password==null)
        {
            echo "Null data found";
        }
        else if($username== $_SESSION['user']['username'] && $password==$_SESSION['user']['password'])
        {
           header('location: home.php');
        }
        else
        {
            echo "Wrong username & password";
        }
    }
    else
    header('location: login.html');
?>