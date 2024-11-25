<?php
    session_start();
    
    $username =  $_SESSION['user']['username'];
    echo "Welcome $username <br>" ;
    echo $_SESSION['user']['email']; echo"<br>";
    echo $_SESSION['user']['dob']; echo"<br>";
    echo $_SESSION['user']['bloodgroup']; echo"<br>";

    
   
?>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <a href="logout.php">logout</a>
</body>
</html>