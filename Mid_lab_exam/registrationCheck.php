<?php
    session_start();

    $usermamae = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $bloodgroup = $_REQUEST['bloodGroup'];
    if (isset($_SESSION['users'])) {
        echo "User already exist";
    }
    if($usermamae==NULL || $password==NULL || $dob==NULL || $bloodgroup==null || $email==Null)
    {
        echo "Null data found";
    }
    else
    {   
    
        

        $_SESSION['user'] = array(
            'username'=> strval($usermamae) ,
            'password'=> strval($password),
            'email' =>  strval($email),
            'dob' => $dob,
            'bloodgroup' => $bloodgroup,
    
        );
        header('location: login.html');
    }
    
    
?>